mod model;
mod pickle;
mod synth;

use clap::Parser;
use rand::seq::SliceRandom;
use rand::{RngCore, SeedableRng};
use std::fs;
use std::io::{self, Write};
use std::path::{Path, PathBuf};
use std::process::Command;

#[derive(Parser, Debug)]
#[command(about = "PHP dependency analyzer driver (Rust port)")]
struct Cli {
    #[arg(long, value_name = "DIR")]
    profile: Option<PathBuf>,

    #[arg(long, value_name = "PATH")]
    synth: Option<PathBuf>,

    #[arg(long, value_name = "DIR")]
    fuzz: Option<PathBuf>,

    #[arg(long, value_name = "DIR", default_value = "./seeds")]
    seeds: PathBuf,

    #[arg(long, default_value_t = 1)]
    count: usize,

    #[arg(long, value_name = "DIR", default_value = "./synth_out")]
    out: PathBuf,

    #[arg(long)]
    build_cache: bool,

    #[arg(long)]
    rebuild_cache: bool,

    #[arg(long, default_value_t = 0.0)]
    join_rate: f64,

    #[arg(short = 'j', long, default_value_t = 1)]
    jobs: usize,
}

const CORPUS_CACHE_FILE: &str = "corpus_cache.pkl";

fn token_hex(n_bytes: usize) -> String {
    let mut buf = vec![0u8; n_bytes];
    rand::thread_rng().fill_bytes(&mut buf);
    hex::encode(buf)
}

fn run_python_cache_build(args: &Cli, rebuild: bool) -> io::Result<()> {
    let mut cmd = Command::new("python3");
    cmd.arg("driver.py");
    if rebuild {
        cmd.arg("--rebuild-cache");
    } else {
        cmd.arg("--build-cache");
    }
    cmd.arg("--seeds").arg(&args.seeds);
    cmd.arg("-j").arg(args.jobs.to_string());
    let status = cmd.status()?;
    if !status.success() {
        return Err(io::Error::new(
            io::ErrorKind::Other,
            format!("driver.py exited with status {}", status),
        ));
    }
    Ok(())
}

fn run_python_profile(profile_dir: &Path, jobs: usize) -> io::Result<()> {
    let status = Command::new("python3")
        .arg("driver.py")
        .arg("--profile")
        .arg(profile_dir)
        .arg("-j")
        .arg(jobs.to_string())
        .status()?;
    if !status.success() {
        return Err(io::Error::new(
            io::ErrorKind::Other,
            "profile failed".to_string(),
        ));
    }
    Ok(())
}

fn load_corpus() -> Result<model::Corpus, String> {
    let bytes =
        fs::read(CORPUS_CACHE_FILE).map_err(|e| format!("cannot read {}: {}", CORPUS_CACHE_FILE, e))?;
    let v = pickle::from_bytes(&bytes).map_err(|e| format!("parse {}: {}", CORPUS_CACHE_FILE, e))?;
    let corpus = model::load_corpus(&v)?;
    println!(
        "Loaded cached corpus index from {} ({} statements, {} types, {} files)",
        CORPUS_CACHE_FILE,
        corpus.node_type_index.values().map(|v| v.len()).sum::<usize>(),
        corpus.node_type_index.len(),
        corpus.file_cache.len()
    );
    Ok(corpus)
}

fn load_constraint(path: &Path) -> Result<Vec<model::Node>, String> {
    let bytes =
        fs::read(path).map_err(|e| format!("cannot read {}: {}", path.display(), e))?;
    let v = pickle::from_bytes(&bytes).map_err(|e| format!("parse {}: {}", path.display(), e))?;
    model::load_constraint(&v)
}

fn collect_pickles(path: &Path) -> Vec<PathBuf> {
    if path.is_dir() {
        let mut files: Vec<PathBuf> = fs::read_dir(path)
            .map(|rd| {
                rd.filter_map(|e| e.ok())
                    .map(|e| e.path())
                    .filter(|p| p.extension().and_then(|s| s.to_str()) == Some("pickle"))
                    .collect()
            })
            .unwrap_or_default();
        files.sort();
        files
    } else {
        vec![path.to_path_buf()]
    }
}

fn sanitize(php_file: &Path) {
    let er = path_with_suffix(php_file, ".er");
    let tr = path_with_suffix(php_file, ".tr");
    for i in 0..2 {
        let _ = Command::new("bash")
            .arg("./sanitize.sh")
            .arg(php_file)
            .arg(i.to_string())
            .stdout(std::process::Stdio::piped())
            .stderr(std::process::Stdio::piped())
            .output();
    }
    if tr.exists() {
        let _ = fs::remove_file(&tr);
    } else if !er.exists() {
        let _ = fs::remove_file(php_file);
    }
}

fn path_with_suffix(p: &Path, suffix: &str) -> PathBuf {
    let mut s = p.as_os_str().to_owned();
    s.push(suffix);
    PathBuf::from(s)
}

fn clean_workspace() {
    let _ = Command::new("git")
        .args([
            "clean", "-fd",
            "-e", "corpus_cache.pkl",
            "-e", "synth_out",
            "-e", "php",
            "-e", "seeds",
            "-e", "/ramdisk",
            "-e", "src",
            "-e", "Cargo.toml",
            "-e", "Cargo.lock",
            "-e", "target",
            "-e", "driver.py",
            "-e", "CLAUDE.md",
            "-e", "README.md",
            "-e", "jc",
        ])
        .status();
}

fn cmd_synth(args: &Cli) -> Result<(), String> {
    let target = args.synth.as_ref().unwrap();
    let pickles = collect_pickles(target);
    if pickles.is_empty() {
        return Err(format!("no .pickle files at {}", target.display()));
    }

    if args.rebuild_cache {
        run_python_cache_build(args, true).map_err(|e| e.to_string())?;
    }
    let corpus = load_corpus()?;

    fs::create_dir_all(&args.out).map_err(|e| e.to_string())?;

    let mut rng = rand::rngs::StdRng::from_entropy();

    for pf in &pickles {
        let constraint = match load_constraint(pf) {
            Ok(c) => c,
            Err(e) => {
                eprintln!("Warning: skipping {}: {}", pf.display(), e);
                continue;
            }
        };
        let stem = pf
            .file_stem()
            .and_then(|s| s.to_str())
            .unwrap_or("constraint");
        let suffix = token_hex(5);
        let base_name = format!("{}{}", stem, suffix);
        for i in 0..args.count {
            let php_source = synth::synthesize(&mut rng, &corpus, &constraint, args.join_rate);
            let out_name = if args.count == 1 {
                format!("{}.php", base_name)
            } else {
                format!("{}_{}.php", base_name, i)
            };
            let out_path = args.out.join(&out_name);
            fs::write(&out_path, php_source).map_err(|e| e.to_string())?;
            println!("  {}", out_path.display());
        }
    }

    println!(
        "\nGenerated {} file(s) in {}/",
        pickles.len() * args.count,
        args.out.display()
    );
    Ok(())
}

fn cmd_fuzz(args: &Cli) -> Result<(), String> {
    let constraints_dir = args.fuzz.as_ref().unwrap();
    let pickles = collect_pickles(constraints_dir);
    if pickles.is_empty() {
        return Err(format!("no .pickle files in {}", constraints_dir.display()));
    }

    let mut constraints: Vec<(PathBuf, Vec<model::Node>)> = Vec::new();
    for pf in &pickles {
        match load_constraint(pf) {
            Ok(c) => constraints.push((pf.clone(), c)),
            Err(e) => eprintln!("Warning: skipping {}: {}", pf.display(), e),
        }
    }
    println!(
        "Loaded {} constraints from {}",
        constraints.len(),
        constraints_dir.display()
    );

    if args.rebuild_cache {
        run_python_cache_build(args, true).map_err(|e| e.to_string())?;
    }
    let corpus = load_corpus()?;

    fs::create_dir_all(&args.out).map_err(|e| e.to_string())?;

    let mut rng = rand::rngs::StdRng::from_entropy();
    let mut iteration: u64 = 0;
    let mut errors_found: u64 = 0;
    println!("Fuzzing started. Ctrl+C to stop.\n");
    loop {
        if iteration % 100 == 0 {
            clean_workspace();
        }
        iteration += 1;
        let (pf, constraint) = constraints.choose(&mut rng).unwrap();
        let php_source = synth::synthesize(&mut rng, &corpus, constraint, args.join_rate);
        let stem = pf
            .file_stem()
            .and_then(|s| s.to_str())
            .unwrap_or("constraint");
        let out_name = format!("fuzz_{}_{}.php", stem, token_hex(5));
        let out_path = args.out.join(&out_name);
        if let Err(e) = fs::write(&out_path, php_source) {
            eprintln!("write failed: {}", e);
            continue;
        }
        sanitize(&out_path);
        let er_path = path_with_suffix(&out_path, ".er");
        if er_path.exists() {
            errors_found += 1;
            println!("[{}] ERROR found: {}", iteration, er_path.display());
        } else {
            print!(
                "[{}] clean  (errors so far: {})\r",
                iteration, errors_found
            );
            let _ = io::stdout().flush();
        }
    }
}

fn main() {
    let args = Cli::parse();

    if args.build_cache {
        if let Err(e) = run_python_cache_build(&args, false) {
            eprintln!("build-cache failed: {}", e);
            std::process::exit(1);
        }
        return;
    }

    if let Some(dir) = &args.profile {
        if let Err(e) = run_python_profile(dir, args.jobs) {
            eprintln!("profile failed: {}", e);
            std::process::exit(1);
        }
        return;
    }

    if args.fuzz.is_some() {
        if let Err(e) = cmd_fuzz(&args) {
            eprintln!("fuzz error: {}", e);
            std::process::exit(1);
        }
        return;
    }

    if args.synth.is_some() {
        if let Err(e) = cmd_synth(&args) {
            eprintln!("synth error: {}", e);
            std::process::exit(1);
        }
        return;
    }

    eprintln!("nothing to do — pass --synth, --fuzz, --profile, or --build-cache");
}

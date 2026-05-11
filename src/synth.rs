//! Synthesis pipeline: walk a JOC constraint tree, fill data slots with real
//! PHP snippets from the corpus, emit a complete PHP script.

use crate::model::{CompKind, Corpus, Entry, Node, StatementResult};
use rand::prelude::SliceRandom;
use rand::Rng;
use regex::Regex;
use std::collections::HashSet;
use std::sync::OnceLock;

pub struct Synthesizer<'a> {
    pub corpus: &'a Corpus,
    pub join_rate: f64,
    name_counter: u64,
}

impl<'a> Synthesizer<'a> {
    pub fn new(corpus: &'a Corpus, join_rate: f64) -> Self {
        Self {
            corpus,
            join_rate,
            name_counter: 0,
        }
    }

    fn next_name(&mut self, prefix: &str) -> String {
        let n = self.name_counter;
        self.name_counter += 1;
        format!("{}_{}", prefix, n)
    }
}

fn def_name_re() -> &'static Regex {
    static R: OnceLock<Regex> = OnceLock::new();
    R.get_or_init(|| {
        Regex::new(r"(?i)(?:function\s*&?\s*|class\s+|trait\s+|interface\s+)(\w+)").unwrap()
    })
}

fn class_only_modifiers_re() -> &'static Regex {
    static R: OnceLock<Regex> = OnceLock::new();
    R.get_or_init(|| {
        Regex::new(r"\b(?:(?:public|protected|private|abstract|final|static)\s+)+(?:function\b)")
            .unwrap()
    })
}

fn simple_var_re() -> &'static Regex {
    static R: OnceLock<Regex> = OnceLock::new();
    R.get_or_init(|| Regex::new(r"^\$[a-zA-Z_][a-zA-Z0-9_]*$").unwrap())
}

fn class_scope_re() -> &'static Regex {
    static R: OnceLock<Regex> = OnceLock::new();
    R.get_or_init(|| {
        Regex::new(
            r"\b(?:self|parent|static)\s*::|new\s+(?:self|static)\b|\)\s*:\s*(?:self|parent|static)\b",
        )
        .unwrap()
    })
}

fn strip_class_modifiers(text: &str) -> String {
    class_only_modifiers_re()
        .replace_all(text, "function")
        .into_owned()
}

fn extract_def_name(source_text: &str) -> Option<String> {
    def_name_re()
        .captures(source_text)
        .and_then(|c| c.get(1))
        .map(|m| m.as_str().to_string())
}

fn is_simple_var(symbol: &str) -> bool {
    simple_var_re().is_match(symbol)
}

fn replace_variable(code: &str, old_var: &str, new_var: &str) -> String {
    let pat = format!(
        r"{}(?:$|(?P<next>[^a-zA-Z0-9_\u{{80}}-\u{{FF}}]))",
        regex::escape(old_var)
    );
    let re = match Regex::new(&pat) {
        Ok(r) => r,
        Err(_) => return code.to_string(),
    };
    re.replace_all(code, |caps: &regex::Captures| {
        if let Some(m) = caps.name("next") {
            format!("{}{}", new_var, m.as_str())
        } else {
            new_var.to_string()
        }
    })
    .into_owned()
}

fn has_class_scope_refs(text: &str) -> bool {
    text.contains("$this") || class_scope_re().is_match(text)
}

fn needs_function_scope(text: &str) -> bool {
    text.contains("yield")
}

fn comp_to_descriptions(comp_type: &str) -> &'static [&'static str] {
    match comp_type {
        "if" => &["Stmt_If (region)"],
        "else" => &["Stmt_If (region)"],
        "for" => &["Stmt_For (region)", "Stmt_Foreach (region)"],
        "while" => &["Stmt_While (region)"],
        "do_while" => &["Stmt_While (region)"],
        "try" => &["Stmt_TryCatch (region)"],
        "catch" => &["Stmt_Catch (region)"],
        "finally" => &[],
        "func" => &["Stmt_Function (region)", "Stmt_ClassMethod (region)"],
        "class" => &[
            "Stmt_Class (region)",
            "Stmt_Trait (region)",
            "Stmt_Interface (region)",
        ],
        "method" => &["Stmt_ClassMethod (region)"],
        "switch" => &[],
        "assign" => &["Expr_Assign", "Expr_AssignRef"],
        "var_dec" => &["Expr_Assign"],
        "func_call" => &["Expr_FuncCall", "Expr_MethodCall"],
        "update" => &[
            "Expr_PostInc",
            "Expr_PreInc",
            "Expr_PostDec",
            "Expr_PreDec",
        ],
        "return" => &["Stmt_Return"],
        "new" => &["Expr_FuncCall"],
        "throw" => &["Stmt_Echo"],
        "unary" => &["Expr_PreInc", "Expr_PostInc"],
        _ => &[],
    }
}

const HOISTABLE_DESCRIPTIONS: &[&str] = &[
    "Stmt_Function (region)",
    "Stmt_ClassMethod (region)",
    "Stmt_Class (region)",
    "Stmt_Trait (region)",
    "Stmt_Interface (region)",
];

fn is_hoistable(desc: &str) -> bool {
    HOISTABLE_DESCRIPTIONS.iter().any(|d| *d == desc)
}

fn is_catch(desc: &str) -> bool {
    desc == "Stmt_Catch (region)"
}

const MAX_CONTEXT_RETRIES: usize = 10;

pub fn php_builtins_lower() -> Vec<String> {
    let raw = [
        "unserialize", "serialize", "array_map", "array_filter", "array_merge",
        "array_push", "array_pop", "array_shift", "array_unshift", "array_keys",
        "array_values", "array_slice", "array_splice", "array_search",
        "array_reverse", "array_unique", "array_flip", "array_chunk",
        "array_combine", "array_diff", "array_intersect", "count", "sizeof",
        "strlen", "strpos", "substr", "str_replace", "str_pad", "strtolower",
        "strtoupper", "trim", "ltrim", "rtrim", "explode", "implode", "join",
        "sprintf", "printf", "fprintf", "sscanf", "number_format",
        "isset", "unset", "empty", "var_dump", "print_r", "var_export",
        "is_array", "is_string", "is_int", "is_float", "is_bool", "is_null",
        "is_numeric", "is_object", "is_callable", "gettype", "settype",
        "intval", "floatval", "strval", "boolval",
        "file_get_contents", "file_put_contents", "fopen", "fclose", "fread",
        "fwrite", "fgets", "feof", "file", "file_exists", "is_file", "is_dir",
        "mkdir", "rmdir", "rename", "copy", "unlink", "glob", "realpath",
        "basename", "dirname", "pathinfo",
        "json_encode", "json_decode", "json_last_error",
        "preg_match", "preg_match_all", "preg_replace", "preg_split",
        "sort", "rsort", "asort", "arsort", "ksort", "krsort", "usort",
        "in_array", "array_key_exists", "range", "compact", "extract",
        "date", "time", "mktime", "strtotime", "microtime",
        "class_exists", "function_exists", "method_exists", "property_exists",
        "get_class", "get_parent_class", "is_a", "instanceof",
        "header", "setcookie", "session_start", "session_destroy",
        "echo", "print", "die", "exit",
        "min", "max", "abs", "ceil", "floor", "round", "rand", "mt_rand",
        "pow", "sqrt", "log", "exp",
        "md5", "sha1", "hash", "base64_encode", "base64_decode",
        "urlencode", "urldecode", "rawurlencode", "rawurldecode",
        "htmlspecialchars", "htmlentities", "strip_tags",
        "array_walk", "array_column", "array_fill", "array_pad",
        "call_user_func", "call_user_func_array",
        "trigger_error", "set_error_handler", "restore_error_handler",
        "define", "defined", "constant",
        "ob_start", "ob_end_clean", "ob_get_contents", "ob_flush",
        "chr", "ord", "str_repeat", "str_word_count", "str_split",
        "substr_count", "substr_replace", "str_contains", "str_starts_with",
        "str_ends_with", "ucfirst", "lcfirst", "ucwords",
        "ctype_alpha", "ctype_digit", "ctype_alnum",
    ];
    raw.iter().map(|s| s.to_string()).collect()
}

fn dependency_closure(results: &[StatementResult], stmt_id: i64) -> Vec<i64> {
    let mut visited: HashSet<i64> = HashSet::new();
    let mut stack: Vec<i64> = vec![stmt_id];
    while let Some(current) = stack.pop() {
        if !visited.insert(current) {
            continue;
        }
        let idx = current as usize;
        if let Some(r) = results.get(idx) {
            for d in &r.depends_on {
                if !visited.contains(d) {
                    stack.push(*d);
                }
            }
        }
    }
    let mut out: Vec<i64> = visited.into_iter().collect();
    out.sort_unstable();
    out
}

fn source_slice_lossy(r: &StatementResult, source: &[u8]) -> Option<String> {
    let start = r.start_file_pos? as usize;
    let end = r.end_file_pos? as usize;
    if end + 1 > source.len() || start > end + 1 {
        return None;
    }
    let raw = &source[start..end + 1];
    Some(String::from_utf8_lossy(raw).into_owned())
}

#[derive(Default)]
struct DataPick {
    hoisted: Vec<(String, String)>,
    inline: String,
    primary_defs: HashSet<String>,
    free_uses: HashSet<String>,
}

fn pick_data_source<R: Rng + ?Sized>(
    rng: &mut R,
    syn: &Synthesizer,
    comp_type: &str,
    in_method: bool,
    in_function: bool,
    declared_names: &mut HashSet<String>,
) -> DataPick {
    let descriptions = comp_to_descriptions(comp_type);
    let mut candidates: Vec<&Entry> = Vec::new();
    for desc in descriptions {
        if let Some(v) = syn.corpus.node_type_index.get(*desc) {
            candidates.extend(v.iter());
        }
    }
    if candidates.is_empty() {
        return DataPick {
            hoisted: vec![],
            inline: format!("/* no match for {} */", comp_type),
            primary_defs: HashSet::new(),
            free_uses: HashSet::new(),
        };
    }

    let mut last_pick: Option<DataPick> = None;

    for _attempt in 0..MAX_CONTEXT_RETRIES {
        let entry = *candidates.choose(rng).unwrap();
        let filepath = &entry.filepath;
        let start = entry.start_file_pos;
        let end = entry.end_file_pos;
        if start.is_none() || end.is_none() {
            return DataPick {
                hoisted: vec![],
                inline: format!("/* no position for {} */", comp_type),
                primary_defs: HashSet::new(),
                free_uses: HashSet::new(),
            };
        }
        let source = match syn.corpus.file_cache.get(filepath) {
            Some(s) => s.clone(),
            None => {
                return DataPick {
                    hoisted: vec![],
                    inline: format!("/* source not cached for {} */", filepath),
                    primary_defs: HashSet::new(),
                    free_uses: HashSet::new(),
                };
            }
        };
        let results = match syn.corpus.results_cache.get(filepath) {
            Some(r) => r,
            None => {
                let start_u = start.unwrap() as usize;
                let end_u = end.unwrap() as usize;
                if end_u + 1 > source.len() {
                    continue;
                }
                let raw = &source[start_u..end_u + 1];
                let mut snippet = String::from_utf8_lossy(raw).trim().to_string();
                if !snippet.ends_with(';') {
                    snippet.push(';');
                }
                if !in_method && has_class_scope_refs(&snippet) {
                    continue;
                }
                if !in_function && needs_function_scope(&snippet) {
                    continue;
                }
                return DataPick {
                    hoisted: vec![],
                    inline: snippet,
                    primary_defs: HashSet::new(),
                    free_uses: HashSet::new(),
                };
            }
        };

        let stmt_id = entry.stmt_id;
        let closure = dependency_closure(results, stmt_id);

        let mut hoisted_parts: Vec<(String, String)> = Vec::new();
        let mut inline_parts: Vec<String> = Vec::new();
        for sid in &closure {
            let idx = *sid as usize;
            let r = match results.get(idx) {
                Some(r) => r,
                None => continue,
            };
            let text = match source_slice_lossy(r, &source) {
                Some(t) => t,
                None => continue,
            };
            let desc = r.description.as_str();
            if is_hoistable(desc) {
                hoisted_parts.push((text, r.node_type.clone()));
            } else if is_catch(desc) {
                for var in &r.defs {
                    inline_parts.push(format!("{} = new Exception(\"stub\");", var));
                }
            } else {
                inline_parts.push(text);
            }
        }

        if !in_method {
            hoisted_parts.retain(|(t, _)| !has_class_scope_refs(t));
        }

        let mut filtered_hoisted: Vec<(String, String)> = Vec::with_capacity(hoisted_parts.len());
        for (text, node_type) in hoisted_parts.into_iter() {
            if let Some(name) = extract_def_name(&text) {
                if declared_names.contains(&name.to_lowercase()) {
                    continue;
                }
            }
            filtered_hoisted.push((text, node_type));
        }
        let hoisted_parts = filtered_hoisted;

        let mut filtered_inline: Vec<String> = Vec::with_capacity(inline_parts.len());
        for text in inline_parts.into_iter() {
            if let Some(name) = extract_def_name(&text) {
                if declared_names.contains(&name.to_lowercase()) {
                    continue;
                }
            }
            filtered_inline.push(text);
        }
        let inline_parts = filtered_inline;

        let inline_joined = inline_parts.join("\n");
        let mut owned: Vec<String> = inline_joined.split('\n').map(|s| s.to_string()).collect();
        if let Some(last) = owned.last_mut() {
            let trimmed = last.trim_end();
            if !trimmed.ends_with(';') {
                *last = format!("{};", trimmed);
            }
        }
        let inline = owned.join("\n");

        if !in_method && has_class_scope_refs(&inline) {
            last_pick = Some(build_pick_metadata(
                hoisted_parts,
                inline,
                results,
                stmt_id,
                &closure,
            ));
            continue;
        }
        if !in_function && needs_function_scope(&inline) {
            last_pick = Some(build_pick_metadata(
                hoisted_parts,
                inline,
                results,
                stmt_id,
                &closure,
            ));
            continue;
        }

        for (text, _) in &hoisted_parts {
            if let Some(name) = extract_def_name(text) {
                declared_names.insert(name.to_lowercase());
            }
        }
        for text in &inline_parts {
            if let Some(name) = extract_def_name(text) {
                declared_names.insert(name.to_lowercase());
            }
        }

        return build_pick_metadata(hoisted_parts, inline, results, stmt_id, &closure);
    }

    last_pick.unwrap_or_else(|| DataPick {
        hoisted: vec![],
        inline: format!("/* exhausted retries for {} */", comp_type),
        primary_defs: HashSet::new(),
        free_uses: HashSet::new(),
    })
}

fn build_pick_metadata(
    hoisted: Vec<(String, String)>,
    inline: String,
    results: &[StatementResult],
    stmt_id: i64,
    closure: &[i64],
) -> DataPick {
    let primary = results.get(stmt_id as usize);
    let primary_defs: HashSet<String> = primary
        .map(|p| p.defs.clone())
        .unwrap_or_default();
    let mut closure_defs: HashSet<String> = HashSet::new();
    for sid in closure {
        if let Some(r) = results.get(*sid as usize) {
            for d in &r.defs {
                closure_defs.insert(d.clone());
            }
        }
    }
    let primary_uses: HashSet<String> = primary
        .map(|p| p.uses.clone())
        .unwrap_or_default();
    let free_uses: HashSet<String> = primary_uses
        .into_iter()
        .filter(|u| !closure_defs.contains(u))
        .collect();
    DataPick {
        hoisted,
        inline,
        primary_defs,
        free_uses,
    }
}

fn try_create_join<R: Rng + ?Sized>(
    rng: &mut R,
    syn: &mut Synthesizer,
    prev_defs: &HashSet<String>,
    curr_free_uses: &HashSet<String>,
    curr_inline: &str,
) -> Option<(String, String)> {
    let joinable_defs: Vec<&String> = prev_defs.iter().filter(|d| is_simple_var(d)).collect();
    let joinable_uses: Vec<&String> = curr_free_uses.iter().filter(|u| is_simple_var(u)).collect();
    if joinable_defs.is_empty() || joinable_uses.is_empty() {
        return None;
    }
    let def_var = (*joinable_defs.choose(rng).unwrap()).clone();
    let use_var = (*joinable_uses.choose(rng).unwrap()).clone();
    let join_name = syn.next_name("join_var");
    let join_var = format!("${}", join_name);
    let join_assignment = format!("{} = {};", join_var, def_var);
    let modified_inline = replace_variable(curr_inline, &use_var, &join_var);
    Some((join_assignment, modified_inline))
}

enum Element {
    Region {
        hoisted: Vec<(String, String)>,
        lines: Vec<String>,
    },
    Data(DataPick),
    Bare(String),
}

fn synthesize_region<R: Rng + ?Sized>(
    rng: &mut R,
    syn: &mut Synthesizer,
    region: &[Node],
    indent: usize,
    in_method: bool,
    in_function: bool,
    declared_names: &mut HashSet<String>,
) -> (Vec<(String, String)>, Vec<String>) {
    if region.is_empty() {
        return (Vec::new(), Vec::new());
    }
    let pad = "    ".repeat(indent);
    let ctrl_type = match &region[0] {
        Node::Comp(CompKind::Control, t) => t.clone(),
        _ => String::new(),
    };
    let ct = ctrl_type.as_str();
    let child_in_method = in_method || matches!(ct, "method" | "class");
    let child_in_function = in_function || matches!(ct, "func" | "method");

    let mut hoisted: Vec<(String, String)> = Vec::new();
    let mut lines: Vec<String> = Vec::new();

    match ct {
        "if" => lines.push(format!("{}if (true) {{", pad)),
        "else" => lines.push(format!("{}if (!true) {{", pad)),
        "for" => {
            let vname = syn.next_name("i");
            lines.push(format!(
                "{}for (${} = 0; ${} < 10; ${}++) {{",
                pad, vname, vname, vname
            ));
        }
        "while" => lines.push(format!("{}while (true) {{", pad)),
        "do_while" => lines.push(format!("{}do {{", pad)),
        "func" => {
            let fname = syn.next_name("f");
            lines.push(format!("{}function {}() {{", pad, fname));
        }
        "class" => {
            let cname = syn.next_name("C");
            lines.push(format!("{}class {} {{", pad, cname));
        }
        "method" => {
            let mname = syn.next_name("m");
            lines.push(format!("{}public function {}() {{", pad, mname));
        }
        "try" => lines.push(format!("{}try {{", pad)),
        "catch" => lines.push(format!("{}if (true) {{", pad)),
        "finally" => lines.push(format!("{}if (true) {{", pad)),
        "switch" => lines.push(format!("{}if (true) {{", pad)),
        _ => lines.push(format!("{}/* unknown region: {} */ {{", pad, ct)),
    }

    let body_pad = "    ".repeat(indent + 1);
    let mut elements: Vec<Element> = Vec::new();
    if ct == "while" {
        lines.push(format!("{}break;  // avoid infinite loop", body_pad));
    }
    for child in &region[1..] {
        match child {
            Node::Region(sub) => {
                let (sub_h, sub_l) = synthesize_region(
                    rng,
                    syn,
                    sub,
                    indent + 1,
                    child_in_method,
                    child_in_function,
                    declared_names,
                );
                elements.push(Element::Region {
                    hoisted: sub_h,
                    lines: sub_l,
                });
            }
            Node::Comp(CompKind::Data, t) => {
                let pick = pick_data_source(
                    rng,
                    syn,
                    t,
                    child_in_method,
                    child_in_function,
                    declared_names,
                );
                elements.push(Element::Data(pick));
            }
            Node::Comp(CompKind::Control, t) => {
                elements.push(Element::Bare(format!("/* bare control: {} */", t)));
            }
        }
    }

    let mut last_data_defs: Option<HashSet<String>> = None;
    let join_rate = syn.join_rate;
    for el in elements {
        match el {
            Element::Region { hoisted: h, lines: ls } => {
                hoisted.extend(h);
                lines.extend(ls);
            }
            Element::Data(mut pick) => {
                hoisted.extend(pick.hoisted.clone());
                if let Some(prev) = &last_data_defs {
                    if rng.gen::<f64>() < join_rate {
                        if let Some((assign, modified)) =
                            try_create_join(rng, syn, prev, &pick.free_uses, &pick.inline)
                        {
                            lines.push(format!("{}{}", body_pad, assign));
                            pick.inline = modified;
                        }
                    }
                }
                for line in pick.inline.split('\n') {
                    lines.push(format!("{}{}", body_pad, line));
                }
                last_data_defs = Some(pick.primary_defs);
            }
            Element::Bare(s) => {
                lines.push(format!("{}{}", body_pad, s));
            }
        }
    }

    match ct {
        "do_while" => lines.push(format!("{}}} while (false);", pad)),
        "try" => lines.push(format!("{}}} catch (Exception $e) {{}}", pad)),
        _ => lines.push(format!("{}}}", pad)),
    }

    (hoisted, lines)
}

pub fn synthesize<R: Rng + ?Sized>(
    rng: &mut R,
    corpus: &Corpus,
    constraint: &[Node],
    join_rate: f64,
) -> String {
    let mut syn = Synthesizer::new(corpus, join_rate);

    let mut declared_names: HashSet<String> = HashSet::new();
    for b in php_builtins_lower() {
        declared_names.insert(b);
    }

    let mut elements: Vec<Element> = Vec::new();
    for child in constraint.iter().skip(1) {
        match child {
            Node::Region(sub) => {
                let (sub_h, sub_l) = synthesize_region(
                    rng,
                    &mut syn,
                    sub,
                    0,
                    false,
                    false,
                    &mut declared_names,
                );
                elements.push(Element::Region {
                    hoisted: sub_h,
                    lines: sub_l,
                });
            }
            Node::Comp(CompKind::Data, t) => {
                let pick = pick_data_source(
                    rng,
                    &syn,
                    t,
                    false,
                    false,
                    &mut declared_names,
                );
                elements.push(Element::Data(pick));
            }
            Node::Comp(CompKind::Control, t) => {
                elements.push(Element::Bare(format!("/* bare control: {} */", t)));
            }
        }
    }

    let mut hoisted: Vec<(String, String)> = Vec::new();
    let mut body: Vec<String> = Vec::new();
    let mut last_data_defs: Option<HashSet<String>> = None;
    for el in elements {
        match el {
            Element::Region { hoisted: h, lines: ls } => {
                hoisted.extend(h);
                body.extend(ls);
            }
            Element::Data(mut pick) => {
                hoisted.extend(pick.hoisted.clone());
                if let Some(prev) = &last_data_defs {
                    if rng.gen::<f64>() < join_rate {
                        if let Some((assign, modified)) = try_create_join(
                            rng,
                            &mut syn,
                            prev,
                            &pick.free_uses,
                            &pick.inline,
                        ) {
                            body.push(assign);
                            pick.inline = modified;
                        }
                    }
                }
                body.push(pick.inline);
                last_data_defs = Some(pick.primary_defs);
            }
            Element::Bare(s) => body.push(s),
        }
    }

    let mut unique_hoisted: Vec<String> = Vec::new();
    for (mut text, node_type) in hoisted.into_iter() {
        if node_type == "Stmt_ClassMethod" {
            text = strip_class_modifiers(&text);
        }
        if let Some(name) = extract_def_name(&text) {
            let key = name.to_lowercase();
            if declared_names.contains(&key) {
                continue;
            }
            declared_names.insert(key);
        }
        unique_hoisted.push(text);
    }

    let mut out = String::with_capacity(4096);
    out.push_str("<?php\n");
    for h in unique_hoisted {
        out.push_str(&h);
        out.push('\n');
    }
    for b in body {
        out.push_str(&b);
        out.push('\n');
    }
    out
}

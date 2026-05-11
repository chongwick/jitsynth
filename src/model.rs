//! Typed data model. Converts pickle `Value` trees into strongly-typed structs.

use crate::pickle::Value;
use std::collections::{HashMap, HashSet};
use std::rc::Rc;

#[derive(Debug, Clone, Copy, PartialEq, Eq)]
pub enum CompKind {
    Control,
    Data,
}

/// A node in a JOC constraint tree. Either a leaf `Comp(kind, comp_type)` or
/// a nested region (a list whose first element is a ControlComp).
#[derive(Debug, Clone)]
pub enum Node {
    Comp(CompKind, String),
    Region(Vec<Node>),
}

#[derive(Debug, Clone)]
pub struct Entry {
    pub filepath: Rc<String>,
    pub stmt_id: i64,
    pub start_file_pos: Option<i64>,
    pub end_file_pos: Option<i64>,
}

#[derive(Debug, Clone, Default)]
pub struct StatementResult {
    pub stmt_id: i64,
    pub description: String,
    pub node_type: String,
    pub start_file_pos: Option<i64>,
    pub end_file_pos: Option<i64>,
    pub defs: HashSet<String>,
    pub uses: HashSet<String>,
    pub depends_on: HashSet<i64>,
}

pub struct Corpus {
    pub node_type_index: HashMap<String, Vec<Entry>>,
    pub file_cache: HashMap<Rc<String>, Rc<Vec<u8>>>,
    pub results_cache: HashMap<Rc<String>, Vec<StatementResult>>,
}

pub fn load_constraint(v: &Value) -> Result<Vec<Node>, String> {
    let arr = v.as_list().ok_or("constraint root is not a list")?;
    let mut out = Vec::with_capacity(arr.len());
    for item in arr {
        out.push(load_node(item)?);
    }
    Ok(out)
}

fn load_node(v: &Value) -> Result<Node, String> {
    match v {
        Value::List(items) => {
            let mut nodes = Vec::with_capacity(items.len());
            for it in items {
                nodes.push(load_node(it)?);
            }
            Ok(Node::Region(nodes))
        }
        Value::Instance { module, name, state } => {
            let kind = match name.as_str() {
                "ControlComp" => CompKind::Control,
                "DataComp" => CompKind::Data,
                "ObjComp" => CompKind::Data,
                other => {
                    return Err(format!(
                        "unknown comp class {}.{}",
                        module, other
                    ))
                }
            };
            let mut comp_type = String::new();
            for (k, v) in state {
                if k.as_str() == Some("comp_type") {
                    if let Some(s) = v.as_str() {
                        comp_type = s.to_string();
                    }
                }
            }
            Ok(Node::Comp(kind, comp_type))
        }
        other => Err(format!("unexpected constraint node: {:?}", other)),
    }
}

pub fn load_corpus(v: &Value) -> Result<Corpus, String> {
    let t = v.as_tuple().ok_or("corpus root not tuple")?;
    if t.len() != 3 {
        return Err(format!("corpus tuple has {} elems, expected 3", t.len()));
    }
    let nti_raw = t[0].as_dict().ok_or("node_type_index not dict")?;
    let fc_raw = t[1].as_dict().ok_or("file_cache not dict")?;
    let rc_raw = t[2].as_dict().ok_or("results_cache not dict")?;

    let mut path_interner: HashMap<String, Rc<String>> = HashMap::new();
    let mut intern = |s: &str| -> Rc<String> {
        if let Some(r) = path_interner.get(s) {
            return r.clone();
        }
        let r = Rc::new(s.to_string());
        path_interner.insert(s.to_string(), r.clone());
        r
    };

    let mut file_cache: HashMap<Rc<String>, Rc<Vec<u8>>> = HashMap::with_capacity(fc_raw.len());
    for (k, v) in fc_raw {
        let key = k.as_str().ok_or("file_cache key not str")?;
        let bytes = match v {
            Value::Bytes(b) => b.clone(),
            _ => return Err("file_cache value not bytes".into()),
        };
        file_cache.insert(intern(key), bytes);
    }

    let mut node_type_index: HashMap<String, Vec<Entry>> = HashMap::with_capacity(nti_raw.len());
    for (k, v) in nti_raw {
        let desc = k.as_str().ok_or("nti key not str")?.to_string();
        let list = v.as_list().ok_or("nti value not list")?;
        let mut entries = Vec::with_capacity(list.len());
        for tup in list {
            let t = tup.as_tuple().ok_or("nti entry not tuple")?;
            if t.len() != 4 {
                return Err(format!("nti entry has {} fields, expected 4", t.len()));
            }
            let fp = t[0].as_str().ok_or("nti fp not str")?;
            let stmt_id = t[1].as_int().ok_or("nti stmt_id not int")?;
            let start = match &t[2] {
                Value::None => None,
                Value::Int(i) => Some(*i),
                _ => return Err("nti start not int/none".into()),
            };
            let end = match &t[3] {
                Value::None => None,
                Value::Int(i) => Some(*i),
                _ => return Err("nti end not int/none".into()),
            };
            entries.push(Entry {
                filepath: intern(fp),
                stmt_id,
                start_file_pos: start,
                end_file_pos: end,
            });
        }
        node_type_index.insert(desc, entries);
    }

    let mut results_cache: HashMap<Rc<String>, Vec<StatementResult>> = HashMap::with_capacity(rc_raw.len());
    for (k, v) in rc_raw {
        let fp = k.as_str().ok_or("rc key not str")?;
        let list = v.as_list().ok_or("rc value not list")?;
        let mut out = Vec::with_capacity(list.len());
        for entry in list {
            let d = entry.as_dict().ok_or("rc entry not dict")?;
            let mut sr = StatementResult::default();
            for (k, v) in d {
                let key = match k.as_str() {
                    Some(s) => s,
                    None => continue,
                };
                match key {
                    "stmt_id" => sr.stmt_id = v.as_int().unwrap_or(0),
                    "description" => sr.description = v.as_str().unwrap_or("").to_string(),
                    "node_type" => sr.node_type = v.as_str().unwrap_or("").to_string(),
                    "start_file_pos" => {
                        sr.start_file_pos = match v {
                            Value::Int(i) => Some(*i),
                            _ => None,
                        }
                    }
                    "end_file_pos" => {
                        sr.end_file_pos = match v {
                            Value::Int(i) => Some(*i),
                            _ => None,
                        }
                    }
                    "defs" => {
                        if let Some(items) = v.as_set() {
                            for it in items {
                                if let Some(s) = it.as_str() {
                                    sr.defs.insert(s.to_string());
                                }
                            }
                        }
                    }
                    "uses" => {
                        if let Some(items) = v.as_set() {
                            for it in items {
                                if let Some(s) = it.as_str() {
                                    sr.uses.insert(s.to_string());
                                }
                            }
                        }
                    }
                    "depends_on" => {
                        if let Some(items) = v.as_set() {
                            for it in items {
                                if let Some(i) = it.as_int() {
                                    sr.depends_on.insert(i);
                                }
                            }
                        }
                    }
                    _ => {}
                }
            }
            out.push(sr);
        }
        results_cache.insert(intern(fp), out);
    }

    Ok(Corpus {
        node_type_index,
        file_cache,
        results_cache,
    })
}

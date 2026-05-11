//! Minimal pickle protocol-4 reader for the subset of opcodes our two
//! pickle files use (constraint pickles and corpus_cache.pkl).
//!
//! Supports class instances as a tagged variant so the caller can recognize
//! ControlComp/DataComp and convert them into typed Rust enums.

use std::rc::Rc;

#[derive(Debug, Clone)]
#[allow(dead_code)]
pub enum Value {
    None,
    Bool(bool),
    Int(i64),
    Bytes(Rc<Vec<u8>>),
    Str(Rc<String>),
    List(Vec<Value>),
    Tuple(Vec<Value>),
    Set(Vec<Value>),
    Dict(Vec<(Value, Value)>),
    /// A class object referenced by STACK_GLOBAL — used only as an intermediate.
    Class { module: String, name: String },
    /// A constructed instance after NEWOBJ + BUILD.
    Instance {
        module: String,
        name: String,
        state: Vec<(Value, Value)>,
    },
    Mark,
}

impl Value {
    pub fn as_str(&self) -> Option<&str> {
        if let Value::Str(s) = self {
            Some(s.as_str())
        } else {
            None
        }
    }
    pub fn as_int(&self) -> Option<i64> {
        if let Value::Int(i) = self {
            Some(*i)
        } else {
            None
        }
    }
    pub fn as_list(&self) -> Option<&[Value]> {
        if let Value::List(v) = self {
            Some(v.as_slice())
        } else {
            None
        }
    }
    pub fn as_tuple(&self) -> Option<&[Value]> {
        if let Value::Tuple(v) = self {
            Some(v.as_slice())
        } else {
            None
        }
    }
    pub fn as_dict(&self) -> Option<&[(Value, Value)]> {
        if let Value::Dict(v) = self {
            Some(v.as_slice())
        } else {
            None
        }
    }
    pub fn as_set(&self) -> Option<&[Value]> {
        if let Value::Set(v) = self {
            Some(v.as_slice())
        } else {
            None
        }
    }
}

pub fn from_bytes(buf: &[u8]) -> Result<Value, String> {
    let mut p = Parser {
        buf,
        pos: 0,
        stack: Vec::with_capacity(256),
        memo: Vec::with_capacity(256),
    };
    p.run()
}

struct Parser<'a> {
    buf: &'a [u8],
    pos: usize,
    stack: Vec<Value>,
    memo: Vec<Value>,
}

impl<'a> Parser<'a> {
    fn run(&mut self) -> Result<Value, String> {
        loop {
            let op = self.read_u8()?;
            match op {
                // PROTO
                0x80 => {
                    let _proto = self.read_u8()?;
                }
                // FRAME — 8-byte length we don't care about
                0x95 => {
                    self.advance(8)?;
                }
                // STOP
                b'.' => {
                    return self.stack.pop().ok_or_else(|| "empty stack at STOP".into());
                }
                // MARK
                b'(' => self.stack.push(Value::Mark),
                // NONE
                b'N' => self.stack.push(Value::None),
                // NEWTRUE / NEWFALSE
                0x88 => self.stack.push(Value::Bool(true)),
                0x89 => self.stack.push(Value::Bool(false)),
                // EMPTY_LIST / EMPTY_TUPLE / EMPTY_DICT / EMPTY_SET
                b']' => self.stack.push(Value::List(Vec::new())),
                b')' => self.stack.push(Value::Tuple(Vec::new())),
                b'}' => self.stack.push(Value::Dict(Vec::new())),
                0x8f => self.stack.push(Value::Set(Vec::new())),
                // BININT1, BININT2, BININT (4 bytes signed)
                b'K' => {
                    let b = self.read_u8()? as i64;
                    self.stack.push(Value::Int(b));
                }
                b'M' => {
                    let lo = self.read_u8()? as i64;
                    let hi = self.read_u8()? as i64;
                    self.stack.push(Value::Int(lo | (hi << 8)));
                }
                b'J' => {
                    let v = self.read_i32()? as i64;
                    self.stack.push(Value::Int(v));
                }
                // LONG1
                0x8a => {
                    let n = self.read_u8()? as usize;
                    let bytes = self.read_slice(n)?;
                    self.stack.push(Value::Int(decode_long(bytes)));
                }
                // LONG4
                0x8b => {
                    let n = self.read_u32()? as usize;
                    let bytes = self.read_slice(n)?;
                    self.stack.push(Value::Int(decode_long(bytes)));
                }
                // SHORT_BINUNICODE
                0x8c => {
                    let n = self.read_u8()? as usize;
                    let bytes = self.read_slice(n)?.to_vec();
                    let s =
                        String::from_utf8(bytes).map_err(|e| format!("bad utf8 string: {}", e))?;
                    self.stack.push(Value::Str(Rc::new(s)));
                }
                // BINUNICODE (4-byte length, 'X' = 0x58)
                b'X' => {
                    let n = self.read_u32()? as usize;
                    let bytes = self.read_slice(n)?.to_vec();
                    let s =
                        String::from_utf8(bytes).map_err(|e| format!("bad utf8 string: {}", e))?;
                    self.stack.push(Value::Str(Rc::new(s)));
                }
                // BINUNICODE8 (8-byte length)
                0x8d => {
                    let n = self.read_u64()? as usize;
                    let bytes = self.read_slice(n)?.to_vec();
                    let s =
                        String::from_utf8(bytes).map_err(|e| format!("bad utf8 string: {}", e))?;
                    self.stack.push(Value::Str(Rc::new(s)));
                }
                // SHORT_BINBYTES (1-byte length, 'C' = 0x43)
                b'C' => {
                    let n = self.read_u8()? as usize;
                    let bytes = self.read_slice(n)?.to_vec();
                    self.stack.push(Value::Bytes(Rc::new(bytes)));
                }
                // BINBYTES (4-byte length, 'B' = 0x42)
                b'B' => {
                    let n = self.read_u32()? as usize;
                    let bytes = self.read_slice(n)?.to_vec();
                    self.stack.push(Value::Bytes(Rc::new(bytes)));
                }
                // BINBYTES8 (8-byte length)
                0x8e => {
                    let n = self.read_u64()? as usize;
                    let bytes = self.read_slice(n)?.to_vec();
                    self.stack.push(Value::Bytes(Rc::new(bytes)));
                }
                // MEMOIZE
                0x94 => {
                    let top = self
                        .stack
                        .last()
                        .ok_or_else(|| "MEMOIZE with empty stack".to_string())?
                        .clone();
                    self.memo.push(top);
                }
                // BINPUT
                b'q' => {
                    let i = self.read_u8()? as usize;
                    let top = self.stack.last().cloned().ok_or("BINPUT empty stack")?;
                    if self.memo.len() <= i {
                        self.memo.resize(i + 1, Value::None);
                    }
                    self.memo[i] = top;
                }
                // LONG_BINPUT
                b'r' => {
                    let i = self.read_u32()? as usize;
                    let top = self.stack.last().cloned().ok_or("LONG_BINPUT empty stack")?;
                    if self.memo.len() <= i {
                        self.memo.resize(i + 1, Value::None);
                    }
                    self.memo[i] = top;
                }
                // BINGET
                b'h' => {
                    let i = self.read_u8()? as usize;
                    let v = self
                        .memo
                        .get(i)
                        .cloned()
                        .ok_or_else(|| format!("BINGET miss at {}", i))?;
                    self.stack.push(v);
                }
                // LONG_BINGET
                b'j' => {
                    let i = self.read_u32()? as usize;
                    let v = self
                        .memo
                        .get(i)
                        .cloned()
                        .ok_or_else(|| format!("LONG_BINGET miss at {}", i))?;
                    self.stack.push(v);
                }
                // APPEND
                b'a' => {
                    let v = self.stack.pop().ok_or("APPEND no value")?;
                    if let Some(Value::List(l)) = self.stack.last_mut() {
                        l.push(v);
                    } else {
                        return Err("APPEND target not a list".into());
                    }
                }
                // APPENDS — pop everything above last MARK into the list below it
                b'e' => self.do_pops(|stack, items| {
                    if let Some(Value::List(l)) = stack.last_mut() {
                        l.extend(items);
                        Ok(())
                    } else {
                        Err("APPENDS target not a list".into())
                    }
                })?,
                // SETITEM
                b's' => {
                    let v = self.stack.pop().ok_or("SETITEM no value")?;
                    let k = self.stack.pop().ok_or("SETITEM no key")?;
                    if let Some(Value::Dict(d)) = self.stack.last_mut() {
                        d.push((k, v));
                    } else {
                        return Err("SETITEM target not a dict".into());
                    }
                }
                // SETITEMS
                b'u' => self.do_pops(|stack, items| {
                    if let Some(Value::Dict(d)) = stack.last_mut() {
                        if items.len() % 2 != 0 {
                            return Err("SETITEMS odd count".into());
                        }
                        let mut it = items.into_iter();
                        while let (Some(k), Some(v)) = (it.next(), it.next()) {
                            d.push((k, v));
                        }
                        Ok(())
                    } else {
                        Err("SETITEMS target not a dict".into())
                    }
                })?,
                // ADDITEMS — for sets
                0x90 => self.do_pops(|stack, items| {
                    if let Some(Value::Set(s)) = stack.last_mut() {
                        s.extend(items);
                        Ok(())
                    } else {
                        Err("ADDITEMS target not a set".into())
                    }
                })?,
                // TUPLE
                b't' => {
                    let items = self.pop_mark()?;
                    self.stack.push(Value::Tuple(items));
                }
                // TUPLE1 / TUPLE2 / TUPLE3
                0x85 => {
                    let a = self.stack.pop().ok_or("TUPLE1")?;
                    self.stack.push(Value::Tuple(vec![a]));
                }
                0x86 => {
                    let b = self.stack.pop().ok_or("TUPLE2 b")?;
                    let a = self.stack.pop().ok_or("TUPLE2 a")?;
                    self.stack.push(Value::Tuple(vec![a, b]));
                }
                0x87 => {
                    let c = self.stack.pop().ok_or("TUPLE3 c")?;
                    let b = self.stack.pop().ok_or("TUPLE3 b")?;
                    let a = self.stack.pop().ok_or("TUPLE3 a")?;
                    self.stack.push(Value::Tuple(vec![a, b, c]));
                }
                // STACK_GLOBAL: pops name, then module
                0x93 => {
                    let name = self.stack.pop().ok_or("STACK_GLOBAL name")?;
                    let module = self.stack.pop().ok_or("STACK_GLOBAL module")?;
                    let (m, n) = match (module, name) {
                        (Value::Str(m), Value::Str(n)) => ((*m).clone(), (*n).clone()),
                        _ => return Err("STACK_GLOBAL non-string".into()),
                    };
                    self.stack.push(Value::Class {
                        module: m,
                        name: n,
                    });
                }
                // NEWOBJ: pops args (tuple), then cls; push partially-built instance
                0x81 => {
                    let _args = self.stack.pop().ok_or("NEWOBJ args")?;
                    let cls = self.stack.pop().ok_or("NEWOBJ cls")?;
                    if let Value::Class { module, name } = cls {
                        self.stack.push(Value::Instance {
                            module,
                            name,
                            state: Vec::new(),
                        });
                    } else {
                        return Err("NEWOBJ cls not a class".into());
                    }
                }
                // BUILD: pop state, apply to top-of-stack instance
                b'b' => {
                    let state = self.stack.pop().ok_or("BUILD state")?;
                    let kv = match state {
                        Value::Dict(d) => d,
                        Value::None => Vec::new(),
                        Value::Tuple(t) => {
                            if let Some(Value::Dict(d)) = t.into_iter().next() {
                                d
                            } else {
                                Vec::new()
                            }
                        }
                        _ => return Err("BUILD state not a dict".into()),
                    };
                    if let Some(Value::Instance { state: ref mut s, .. }) = self.stack.last_mut() {
                        s.extend(kv);
                    } else {
                        return Err("BUILD target not an instance".into());
                    }
                }
                // REDUCE — fallback: cls(args).
                b'R' => {
                    let _args = self.stack.pop().ok_or("REDUCE args")?;
                    let cls = self.stack.pop().ok_or("REDUCE cls")?;
                    if let Value::Class { module, name } = cls {
                        self.stack.push(Value::Instance {
                            module,
                            name,
                            state: Vec::new(),
                        });
                    } else {
                        return Err("REDUCE cls not a class".into());
                    }
                }
                _ => return Err(format!("unsupported pickle opcode 0x{:02x} at {}", op, self.pos - 1)),
            }
        }
    }

    fn do_pops<F>(&mut self, f: F) -> Result<(), String>
    where
        F: FnOnce(&mut Vec<Value>, Vec<Value>) -> Result<(), String>,
    {
        let items = self.pop_mark()?;
        f(&mut self.stack, items)
    }

    fn pop_mark(&mut self) -> Result<Vec<Value>, String> {
        let mut idx = None;
        for (i, v) in self.stack.iter().enumerate().rev() {
            if matches!(v, Value::Mark) {
                idx = Some(i);
                break;
            }
        }
        let idx = idx.ok_or("MARK not found")?;
        let items: Vec<Value> = self.stack.drain(idx + 1..).collect();
        self.stack.pop(); // remove MARK
        Ok(items)
    }

    fn read_u8(&mut self) -> Result<u8, String> {
        let b = self.buf.get(self.pos).copied().ok_or("EOF u8")?;
        self.pos += 1;
        Ok(b)
    }
    fn read_i32(&mut self) -> Result<i32, String> {
        let s = self.read_slice(4)?;
        Ok(i32::from_le_bytes([s[0], s[1], s[2], s[3]]))
    }
    fn read_u32(&mut self) -> Result<u32, String> {
        let s = self.read_slice(4)?;
        Ok(u32::from_le_bytes([s[0], s[1], s[2], s[3]]))
    }
    fn read_u64(&mut self) -> Result<u64, String> {
        let s = self.read_slice(8)?;
        let mut a = [0u8; 8];
        a.copy_from_slice(s);
        Ok(u64::from_le_bytes(a))
    }
    fn read_slice(&mut self, n: usize) -> Result<&'a [u8], String> {
        if self.pos + n > self.buf.len() {
            return Err("EOF slice".into());
        }
        let s = &self.buf[self.pos..self.pos + n];
        self.pos += n;
        Ok(s)
    }
    fn advance(&mut self, n: usize) -> Result<(), String> {
        if self.pos + n > self.buf.len() {
            return Err("EOF advance".into());
        }
        self.pos += n;
        Ok(())
    }
}

fn decode_long(bytes: &[u8]) -> i64 {
    if bytes.is_empty() {
        return 0;
    }
    let mut v: i64 = 0;
    for (i, b) in bytes.iter().enumerate() {
        v |= (*b as i64) << (8 * i);
    }
    let bits = bytes.len() * 8;
    if bits < 64 && (bytes.last().unwrap() & 0x80) != 0 {
        let mask = !((1i64 << bits) - 1);
        v |= mask;
    }
    v
}

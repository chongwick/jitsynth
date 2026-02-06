# Project Context for Claude

## Project Overview
**Name:** JitSynth
**Description:** JITSynth makes constraint templates out of JavaScript seeds. PHP seeds are manipulated to match these templates to fuzz the PHP interpreter.
**Tech Stack:** Python3, JavaScript AST Parser, PHP AST Parser

## Purpose
The purpose of JITSynth is to find bugs in PHP's JIT compiler. JIT activation has semantic preconditions associated with it. These preconditions include function calls and control flow behaviors. These are rare in PHP's test suite but common in JavaScript's. Thus, we make templates from JavaScript JIT seeds to form new PHP seeds.

## Project Structure
```
/jc        - convert JavaScript seeds to JIT Constraint Templates
/js_seeds         - JavaScript Seeds
/seeds       - PHP seeds
/phuzzilli       - a PHP fuzzer that uses an intermediate representation
```

Key files:
- `walker.py` - This will convert PHP into a representation of modular data and control elements. These modular elements will be able to be matched to JIT Constraint Templates

## Development Guidelines

### Coding Conventions
- Use snake_case for Python functions

### Testing
- Make it work

## Additional Notes
JIT Constraint Templates will coarsely model JavaScript programs. They should capture things like control regions, data operations, and object manipulations.

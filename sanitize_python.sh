#!/bin/bash
# Usage: ./sanitize_python.sh [target_script] [mode(0/1)]
#
# Mode 0: Run without JIT (baseline)
# Mode 1: Run with CPython JIT enabled (PYTHON_JIT=1, -X jit)
#
# Classification:
#   .tr (trash, deleted): timeouts, MemoryError, RecursionError, SyntaxError,
#                         ImportError, ModuleNotFoundError, NameError
#   .er (error, preserved): segfaults, aborts, ASan output, assertion failures,
#                           JIT differential (output differs between modes)

script=$1
mode=$2

if [ "$mode" == "1" ]; then
    # JIT-enabled mode
    export PYTHON_JIT=1
    OUTPUT=$(timeout -s SIGTERM 60 python3 -X jit "$script" 2>&1)
else
    # Baseline mode (no JIT)
    unset PYTHON_JIT
    OUTPUT=$(timeout -s SIGTERM 60 python3 "$script" 2>&1)
fi
RET=$?

# --- Trash classification (benign failures) ---

if [ $RET -ne 0 ]; then
    # Timeout (124 from timeout cmd, 137 SIGKILL, 153 SIGXCPU)
    if [ $RET -eq 124 ] || [ $RET -eq 137 ] || [ $RET -eq 153 ]; then
        mv "$script" "${script}.tr"
        exit 0
    fi

    # MemoryError
    if echo "$OUTPUT" | grep -q "MemoryError"; then
        mv "$script" "${script}.tr"
        exit 0
    fi

    # RecursionError
    if echo "$OUTPUT" | grep -q "RecursionError"; then
        mv "$script" "${script}.tr"
        exit 0
    fi

    # SyntaxError
    if echo "$OUTPUT" | grep -q "SyntaxError"; then
        mv "$script" "${script}.tr"
        exit 0
    fi

    # ImportError / ModuleNotFoundError
    if echo "$OUTPUT" | grep -q -E "ImportError|ModuleNotFoundError"; then
        mv "$script" "${script}.tr"
        exit 0
    fi

    # NameError (undefined variable — expected from synthesis)
    if echo "$OUTPUT" | grep -q "NameError"; then
        mv "$script" "${script}.tr"
        exit 0
    fi

    # TypeError (common from random synthesis)
    if echo "$OUTPUT" | grep -q "TypeError"; then
        mv "$script" "${script}.tr"
        exit 0
    fi

    # AttributeError
    if echo "$OUTPUT" | grep -q "AttributeError"; then
        mv "$script" "${script}.tr"
        exit 0
    fi

    # IndentationError
    if echo "$OUTPUT" | grep -q "IndentationError"; then
        mv "$script" "${script}.tr"
        exit 0
    fi

    # --- Error classification (potential JIT bugs) ---

    # Segfault (exit 139 = 128 + SIGSEGV=11)
    if [ $RET -eq 139 ]; then
        mv "$script" "${script}.er"
        chmod 440 "${script}.er"
        echo "$OUTPUT" > san.log
        exit 0
    fi

    # Abort (exit 134 = 128 + SIGABRT=6)
    if [ $RET -eq 134 ]; then
        mv "$script" "${script}.er"
        chmod 440 "${script}.er"
        echo "$OUTPUT" > san.log
        exit 0
    fi

    # AddressSanitizer output
    if echo "$OUTPUT" | grep -q "AddressSanitizer"; then
        mv "$script" "${script}.er"
        chmod 440 "${script}.er"
        echo "$OUTPUT" > san.log
        exit 0
    fi

    # Assertion failure
    if echo "$OUTPUT" | grep -q ": Assertion "; then
        mv "$script" "${script}.er"
        chmod 440 "${script}.er"
        echo "$OUTPUT" > san.log
        exit 0
    fi

    # Fatal Python error (internal CPython crash)
    if echo "$OUTPUT" | grep -q "Fatal Python error"; then
        mv "$script" "${script}.er"
        chmod 440 "${script}.er"
        echo "$OUTPUT" > san.log
        exit 0
    fi

    # Anything else non-zero that wasn't caught — treat as trash
    mv "$script" "${script}.tr"
    exit 0
fi

# --- Differential mode ---
# If mode 1 (JIT), compare output with baseline (mode 0)
if [ "$mode" == "1" ]; then
    JIT_OUTPUT="$OUTPUT"
    unset PYTHON_JIT
    BASELINE_OUTPUT=$(timeout -s SIGTERM 60 python3 "$script" 2>&1)
    BASELINE_RET=$?

    if [ $BASELINE_RET -eq 0 ] && [ "$JIT_OUTPUT" != "$BASELINE_OUTPUT" ]; then
        mv "$script" "${script}.er"
        chmod 440 "${script}.er"
        echo "=== DIFFERENTIAL BUG ===" > san.log
        echo "--- Baseline output ---" >> san.log
        echo "$BASELINE_OUTPUT" >> san.log
        echo "--- JIT output ---" >> san.log
        echo "$JIT_OUTPUT" >> san.log
        exit 0
    fi
fi

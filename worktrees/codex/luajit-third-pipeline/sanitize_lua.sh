#!/bin/bash
# Usage: ./sanitize_lua.sh [target_script]

script=$1
luajit_bin="/opt/homebrew/bin/luajit"

OUTPUT=$(timeout -s SIGTERM 60 "$luajit_bin" "$script" 2>&1)
RET=$?

if [ $RET -ne 0 ]; then
    if [ $RET -eq 124 ] || [ $RET -eq 137 ] || [ $RET -eq 153 ]; then
        mv "$script" "${script}.tr"
        exit 0
    fi

    if echo "$OUTPUT" | grep -q -E "assertion failed!|: Assertion |PANIC|fatal|AddressSanitizer|Segmentation fault|Abort trap"; then
        mv "$script" "${script}.er"
        chmod 440 "${script}.er"
        printf "%s\n" "$OUTPUT" > san.log
        exit 0
    fi

    mv "$script" "${script}.tr"
    exit 0
fi

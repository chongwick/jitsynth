import os
import random
import subprocess
from olddriver import get_corpus_index

while (True):
    node_type_index, file_cache, results_cache = get_corpus_index('./seeds')
    all_entries = [e for entries in node_type_index.values() for e in entries]
    tmp_code = ["<?php"]
    file_name = "synth_out/"+ str(random.randint(0,9999999))
    for i in range(random.randint(0,24)):
        # 2. Pick one at random
        filepath, stmt_id, start_pos, end_pos = random.choice(all_entries)

        # 3. Slice the source by BYTE offsets, then decode
        source = file_cache[filepath]            # bytes, not str
        snippet = source[start_pos:end_pos + 1].decode('utf-8', errors='ignore')
        tmp_code.append(snippet)

    with open(file_name,"w") as f:
        f.write("\n".join(tmp_code))

    subprocess.run(["./sanitize.sh", file_name, "0"])

    if os.path.exists(file_name):
        os.remove(file_name)

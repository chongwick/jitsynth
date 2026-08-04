<?php
$pipe = [['val1'],['val2'],];

for ($i = 0; $i < 30; ++$i) {
        echo "$i ";
        if (!is_pipeline($pipe)) {
                echo 'ERROR ';
        }
}

function is_pipeline($pipeline): bool {
        foreach ($pipeline as $stage) {
                if (!is_array($stage)) {
                        return false; // must never happen
                }

                $stage = (array) $stage;
                reset($stage);
        }

        return true;
}
?>

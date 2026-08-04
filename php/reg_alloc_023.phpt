<?php
class test {
    public function foo(string $key, int $start, int $end, ?string $type = null): void
    {
        if (isset($this->a[$key])) {
            foreach ($this->a[$key] as $i => $data) {
                if ($data->from >= $start && $data->from <= $end) {
                    if ($type === null || $type === $data->type) {
                        unset($this->a[$key][$i]);
                    }
                }
            }
        }
        if (isset($this->type_map[$key])) {
            foreach ($this->b[$key] as $map_start => $_) {
                if ($map_start >= $start && $map_start <= $end) {
                    unset($this->b[$key][$map_start]);
                }
            }
        }
        if (isset($this->c[$key])) {
            foreach ($this->c[$key] as $map_start => $_) {
                if ($map_start >= $start && $map_start <= $end) {
                    unset($this->c[$key][$map_start]);
                }
            }
        }
        if (isset($this->d[$key])) {
            foreach ($this->d[$key] as $map_start => $_) {
                if ($map_start >= $start && $map_start <= $end) {
                    unset($this->d[$key][$map_start]);
                }
            }
        }
    }
}
?>
DONE

<?php
class CacheItem {
    protected mixed $value = null;
}

function test($value) {
    $test = Closure::bind(
        static function ($value) {
            $item = new CacheItem();
            if (\is_array($value) && \array_key_exists('value', $value)) {
                $item->value = $value['value'];
            }
            return $item;
        },
        null,
        CacheItem::class);
    return $test($value);
}

$values = [['value'=>'str'], ['value'=>'str'], ['value'=>42]];
$n = count($values);

for ($i = 0; $i < $n; $i++) {
   test($values[$i]);
}
?>
OK

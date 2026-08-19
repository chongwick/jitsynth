<?php
class Caster
{
    const EXCLUDE_PUBLIC = 8;
    const EXCLUDE_PRIVATE = 32;
    const EXCLUDE_STRICT = 512;

    public static function filter(array $a, $filter): int
    {
        foreach ($a as $k => $v) {
            if (!isset($k[1])) {
                $type |= self::EXCLUDE_PUBLIC;
            } else {
                $type |= self::EXCLUDE_PRIVATE;
            }

            if ((self::EXCLUDE_STRICT & $filter) ? $type === $filter : $type) {
            }
        }

        return $a;
    }

}
?>
OK

<?php

/**
 * Created by PhpStorm.
 * User: Kamil
 * Date: 20.06.14
 * Time: 06:42
 */
class ArrayHelper
{
    /**
     * @param array $src
     * @param array $in
     * @param int|string $pos
     * @return array|null
     */
    static function insert_before($src, $in, $pos)
    {
        if (is_int($pos)) $R = array_merge(array_slice($src, 0, $pos), $in, array_slice($src, $pos));
        else {
            foreach ($src as $k => $v) {
                if ($k == $pos) $R = array_merge($R, $in);
                $R[$k] = $v;
            }
        }
        return $R;
    }

    /**
     * @param array $src
     * @param array $in
     * @param int|string $pos
     * @return array|null
     */
    static function insert_after($src, $in, $pos)
    {
        if (is_int($pos)) $R = array_merge(array_slice($src, 0, $pos + 1), $in, array_slice($src, $pos + 1));
        else {
            foreach ($src as $k => $v) {
                $R[$k] = $v;
                if ($k == $pos) $R = array_merge($R, $in);
            }
        }
        return $R;
    }
} 
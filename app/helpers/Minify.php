<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 09.06.14
 * Time: 14:24
 */
class Minify
{
    static function d($string)
    {

        return preg_replace("/<img .* \/>/", "", $string);

    }

    static function limit_text($text, $limit = 400)
    {
        if (strlen($text) > $limit) {
            $pos = strpos($text, ' ', $limit - 10);
            return substr($text, 0, $pos) . "...";
        } else {
            return $text;
        }
    }
} 
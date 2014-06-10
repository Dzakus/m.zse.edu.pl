<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 09.06.14
 * Time: 14:24
 */

class Minify {
    static function d($string){

        return preg_replace("/<img .* \/>/", "", $string);

    }
} 
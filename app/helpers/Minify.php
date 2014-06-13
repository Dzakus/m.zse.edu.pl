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

    static function limit_text($text, $limit = 400) {
        if (strlen($text) > $limit) {
            $pos = strpos($text, ' ', $limit-10);
            return substr($text, 0, $pos)."...";
        } else {
            return $text;
        }
    }

    static function table_responsive($file){
        $html = file_get_contents("http://szkola.zse.edu.pl/zastepstwa/".$file);
//        $cleared = preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/i",'<$1$2>', $html);
        $singles = preg_split('/<tr>
<td nowrap="" class="st17" align="LEFT">
&nbsp;
<\/td>
<td nowrap="" class="st17" align="LEFT">
&nbsp;
<\/td>
<td nowrap="" class="st17" align="LEFT">
&nbsp;
<\/td>
<td nowrap="" class="st17" align="LEFT">
&nbsp;
<\/td>
<\/tr>/', $html);
//        $singles = explode('<tr><td nowrap="" class="st17" align="LEFT">&nbsp;</td><td nowrap="" class="st17" align="LEFT">&nbsp;</td><td nowrap="" class="st17" align="LEFT">&nbsp;</td><td nowrap="" class="st17" align="LEFT">&nbsp;</td></tr>', $html);
        return $singles;
    }
} 
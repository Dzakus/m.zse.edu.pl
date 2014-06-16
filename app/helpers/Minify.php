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
//        $cleared = preg_replace("/<([a-z][a-z0-9]*)[^>]*?(\/?)>/i",'<$1$2>', $html);
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        //load the html
        $html = $dom->loadHTMLFile("http://szkola.zse.edu.pl/zastepstwa/".$file);
        libxml_clear_errors();
        //discard white space
        $dom->preserveWhiteSpace = false;

        //the table by its tag name
        $tables = $dom->getElementsByTagName('table');

        //get all rows from the table
        $rows = $tables->item(0)->getElementsByTagName('tr');
        $cols = null;
        $buffers = [];
        foreach ($rows as $row)
        {
            $cols = $row->getElementsByTagName('td');
            if($cols->length == 4){
                $buffer = '';
                foreach($cols as $col){
                    $buffer.=$col->getAttribute('class');
                }
                if(preg_match("/(st17){4}/", $buffer)){
                    array_push($buffers, $buffer);
                }
            }
        }
        return $buffers;
//        return $singles;
    }
} 
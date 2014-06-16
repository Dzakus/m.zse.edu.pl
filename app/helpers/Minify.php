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
        $cleared = preg_replace("/<\/?nobr>/i", "", file_get_contents("http://szkola.zse.edu.pl/zastepstwa/".$file));
        $dom = new DOMDocument();
        $dom->loadHTML($cleared);
        $tables = $dom->getElementsByTagName('table');
        $rows = $tables->item(0)->getElementsByTagName('tr');

        dd(e(Minify::getInnerHTML($rows->item(0), $dom)));

        $cols = null;
        $buffers = [];
        $buffer = '';
        foreach ($rows as $row)
        {
            $cols = $row->getElementsByTagName('td');
            $tmpRow = '';
//            echo '**'.).'||';
            if(Minify::getInnerHTML($cols->item(0), $dom) == '<td class="st17" nowrap="" align="LEFT">&nbsp;</td>'){
                array_push($buffers, $buffer);
                $buffer = '';
            }else{
//                echo('*');
                $buffer.=Minify::getInnerHTML($row, $dom);
            }
        }
//        array_push($buffers, $buffer);
        return $buffers;
    }

    static function getInnerHTML($Node, $dom)
    {
        return $dom->saveHTML($Node);
    }
} 
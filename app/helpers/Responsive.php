<?php

/**
 * Created by PhpStorm.
 * User: Kamil
 * Date: 17.06.14
 * Time: 20:38
 */
class Responsive
{
    public static function table($file)
    {
        $cleared = preg_replace("/<\/?nobr>/i", "", file_get_contents("http://szkola.zse.edu.pl/zastepstwa/" . $file));
        $dom = new DOMDocument();
        $dom->loadHTML($cleared);
        $tables = $dom->getElementsByTagName('table');
        $rows = $tables->item(0)->getElementsByTagName('tr');


        $cols = null;
        $buffers = [];
        $buffer = '';
//        dd(e(Minify::getInnerHTML($rows->item(10)->getElementsByTagName('td')->item(0), $dom)));
        foreach ($rows as $row) {
            $cols = $row->getElementsByTagName('td');
            if ($cols->item(0)->getAttribute('class') == "st17") {
                array_push($buffers, $buffer);
                $buffer = '';
            } else {
                $buffer .= e($dom->getInnerHTML($row));
            }
        }
        return $buffers;
    }
} 
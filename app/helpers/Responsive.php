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
        $tables = [];
        $statics = ['title' => ''];
        $tmpTable = ["<legend>" . $statics["title"] . "</legend>", '<table>', '<thead>', '<tr>', '</tr>', '</thead>', '<tbody>', '</tbody>', '</table>'];
//        dd(e(Minify::getInnerHTML($rows->item(10)->getElementsByTagName('td')->item(0), $dom)));
        foreach ($rows as $row) {
            $cols = $row->getElementsByTagName('td');
            if (($cols->item(0)->getAttribute('class') == "st18") || ($cols->item(0)->getAttribute('class') == "st17")) {
                $tables[count($tables)] = $tmpTable;
                array_push($buffers, $buffer);
                $buffer = '';
            } else {
                foreach ($cols as $col) {
                    switch ($col->getAttribute('class')) {
                        case "st0":
                        {
                            $statics['title'] = $col->nodeValue;
                            $tmpTable[0] = "<legend>" . $statics["title"] . "</legend>";
                            break;
                        }
                        case "st1":
                        {
//                            $tmpTable = ArrayHelper::insert_after($tmpTable, ["<td>$col->nodeValue</td>"], 2);
                            break;
                        }
                        case "st2":
                        {

                            break;
                        }
                    }
                }
                $buffer .= e($dom->saveHTML($row));
            }
        }
//        for ($i = 0; $i < count($tmpTable); $i++) {
//            for ($j = 0; $j < count($tmpTable[$i]); $j++) {
//                $tmpTable[$i][$j] = $tmpTable[$i][$j];
//            }
//        }
//        foreach($tmpTable as $t => $i){
//            foreach($i as $ind +=> $val){
//            }
////            $tmpTable[$t] = e($i);
//        }
        return $tmpTable;
    }
} 
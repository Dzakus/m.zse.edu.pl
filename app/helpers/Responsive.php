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
        $tmpTable = ["", '<table>', "", '<thead>', '<tr>', "", "", "", "", '</tr>', '</thead>', '<tbody>', "", '</tbody>', '</table>'];
//        dd(e(Minify::getInnerHTML($rows->item(10)->getElementsByTagName('td')->item(0), $dom)));
        foreach ($rows as $row) {
            $tmpTable[12] .= "<tr>";
            $cols = $row->getElementsByTagName('td');
            if (($cols->item(0)->getAttribute('class') == "st18") || ($cols->item(0)->getAttribute('class') == "st17")) {
                $tables[count($tables)] = $tmpTable;
            } else {
                foreach ($cols as $col) {
                    switch ($col->getAttribute('class')) {
                        case "st0":
                        {
                            $tmpTable[0] = "<legend>" . $col->nodeValue . "</legend>";
                            break;
                        }
                        case "st1":
                        {
                            $tmpTable[2] = $col->nodeValue;
                            break;
                        }
                        case "st4":
                        {
                            if (preg_match("/\s*\d\s*/", $col->nodeValue)) {
                                $tmpTable[12] .= '<td data-table="Lekcja">' . $col->nodeValue . '</td>';
                            }
                            if (preg_match("/.*lekcja.*/", $col->nodeValue)) {
                                $tmpTable[5] = "<th>Lekcja</th>";
                            } elseif (preg_match("/.*po lekcji.*/", $col->nodeValue)) {
                                $tmpTable[5] = "<th>Po lekcji</th>";
                            }
                            break;
                        }
                    }
                }
            }
            $tmpTable[12] .= "</tr>";
        }
//
        return e(join("|", $tmpTable));
    }
} 
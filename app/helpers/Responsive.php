<?php

/**
 * Created by PhpStorm.
 * User: Kamil
 * Date: 17.06.14
 * Time: 20:38
 */
class Responsive
{
    public static function substitutes($file)
    {
        $cleared = preg_replace("/<\/?nobr>/i", "", file_get_contents("http://szkola.zse.edu.pl/zastepstwa/f37a735e1fa1b72aa4a1e08eca0e066a57f0f7dc837364189661df8706b6bbfcafdfb20d589bbcb456b88d8368447e59d5522bcf0885f560f7004213ef281371"));
//        $cleared = preg_replace("/<\/?nobr>/i", "", file_get_contents("http://szkola.zse.edu.pl/zastepstwa/" . $file));
        $dom = new DOMDocument();
        $dom->loadHTML($cleared);
        $tables = $dom->getElementsByTagName('table');
        $rows = $tables->item(0)->getElementsByTagName('tr');
        $prototype = '
        <table class="tablesaw tablesaw-stack" data-mode="stack">
            <thead>
                @thead
            </thead>
            <tbody>
                @tbody
            </tbody>
        </table>';
        $separatedTables = array();
        $tmpTable = (string)$prototype;
        $arr = array();
        foreach ($rows as $i => $row) {
            $cols = $row->getElementsByTagName('td');
            $rowVal = "";
            foreach ($cols as $col) {
                $rowVal .= $col->nodeValue;
            }
            $rowVal = preg_replace('~\xc2\xa0~', 'X', $rowVal);
            array_push($arr, $rowVal);
            if (count_chars($rowVal)[ord("X")] >= 4) {
                array_push($separatedTables, $tmpTable);
                $tmpTable = (string)$prototype;
            } else {
                if (preg_match("/.*lekcja.*/", $cols->item(0)->nodeValue)) {
                    $tmpTable = preg_replace("/@thead/", "<tr><th>Lekcja</th><th>Opis</th><th>Zastępca</th><th>Uwagi</th></tr>", $tmpTable);
                } elseif (preg_match("/.*po lekcji.*/", $cols->item(0)->nodeValue)) {
//                    $tmpTable = preg_replace("/@thead/", "<tr><th>Po lekcji</th><th>Miejsce</th><th>Zastępca</th><th>Uwagi</th></tr>", $tmpTable);
                } else {
                    if ($cols->item(3))
                        $tmpTable = preg_replace("/@tbody/", "<tr><td>" . $cols->item(0)->nodeValue . "</td><td>" . $cols->item(1)->nodeValue . "</td><td>" . $cols->item(2)->nodeValue . "</td><td>" . $cols->item(3)->nodeValue . "</td></tr>@tbody", $tmpTable);
                }
            }
        }
        array_push($separatedTables, $tmpTable);
        foreach ($separatedTables as $i => $tab) {
            $separatedTables[$i] = preg_replace("/@tbody/", "", $tab);
//            Å
        }

        return $separatedTables;
//        die();
    }

    public static function table($file)
    {
        $cleared = preg_replace("/<\/?nobr>/i", "", file_get_contents("http://szkola.zse.edu.pl/zastepstwa/" . $file));
        $dom = new DOMDocument();
        $dom->loadHTML($cleared);
        $tables = $dom->getElementsByTagName('table');
        $rows = $tables->item(0)->getElementsByTagName('tr');
        $tables->item(0)->setAttribute('class', 'tablesaw tablesaw-stack');

        $cols = null;
        $tables = [];
//        dd(e(Minify::getInnerHTML($rows->item(10)->getElementsByTagName('td')->item(0), $dom)));
        $tmpTable = ["", '<table class="tablesaw tablesaw-stack">', "", '<thead>', '<tr>', "", "", "", "", '</tr>', '</thead>', '<tbody>', "", '</tbody>', '</table>'];
        foreach ($rows as $row) {
            $tmpTable[12] .= "<tr>";
            $cols = $row->getElementsByTagName('td');
            if ($cols->item(0)->getAttribute('class') == "st1" && $cols->item(0)->nodeValue == "dyÅ¼ury") {
                array_push($tables, $tmpTable);
            }
            if (($cols->item(0)->getAttribute('class') == "st18") || ($cols->item(0)->getAttribute('class') == "st17")) {
                array_push($tables, $tmpTable);
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
                        case "st7":
                        case "st10":
                        case "st4":
                        {
                            if (preg_match("/\s*\d\s*/", $col->nodeValue)) {
                                $tmpTable[12] .= '<td data-title="Lekcja">' . $col->nodeValue . '</td>';
                            }
                            if (preg_match("/.*lekcja.*/", $col->nodeValue)) {
                                $tmpTable[5] = "<th>Lekcja</th>";
                            } elseif (preg_match("/.*po lekcji.*/", $col->nodeValue)) {
                                $tmpTable[5] = "<th>Po lekcji</th>";
                            }
                            break;
                        }
                        case "st5":
                        {
                            if (preg_match("/.*opis.*/", $col->nodeValue)) {
                                $tmpTable[6] = "<th>Opis</th>";
                            } elseif (preg_match("/.*miejsce.*/", $col->nodeValue)) {
                                $tmpTable[6] = "<th>Miejsce</th>";
                            }elseif (preg_match("/.*zast.*pca.*/", $col->nodeValue)) {
                                $tmpTable[7] = "<th>Zastępca</th>";
                            }
                            break;
                        }
                        case "st6":
                        {
                            if (preg_match("/.*uwagi.*/", $col->nodeValue)) {
                                $tmpTable[8] = "<th>Uwagi</th>";
                            }
                            break;
                        }
                        case "st11":
                        case "st13":
                        case "st16":
                        case "st8":{
                            if (preg_match("/.*Uczniowie zwolnieni do domu.*/", $col->nodeValue)) {
                                $tmpTable[12] .= '<td data-title="Opis">' . $col->nodeValue . '</td>';
                            }elseif (preg_match("/\d \w\(?\d?\)? - [a-zA-Z]*\d*/", $col->nodeValue)) {
                                $tmpTable[12] .= '<td data-title="Opis">' . $col->nodeValue . '</td>';
                            }elseif (preg_match("/[a-zA-Z]*\d*/", $col->nodeValue)) {
                                $tmpTable[12] .= '<td data-title="Miejsce">' . $col->nodeValue . '</td>';
                            }else{
                                $tmpTable[12] .= '<td data-title="Zastępca">' . $col->nodeValue . '</td>';
                            }
                            break;
                        }
                        case "st12":
                        case "st9":
                        case "st14":
                        case "st17":{
                            $tmpTable[12] .= '<td data-title="Uwagi">' . $col->nodeValue . '</td>';
                            break;
                        
                        }
                        case "st20":
                        case "st19":
                        case "st15":{
                            $tmpTable[12] .= '<td data-title="Po lekcji">' . $col->nodeValue . '</td>';
                            break;
                        }
                    }
                }
            }
            $tmpTable[12] .= "</tr>";
        }
//
//        return $cleared;
        return join("", $tmpTable);
    }
} 
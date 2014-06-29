<?php

class Responsive
{
    public static function substitutes($file)
    {
        $cleared = preg_replace("/<\/?nobr>/i", "", file_get_contents("http://szkola.zse.edu.pl/zastepstwa/" . $file));
        $cleared = mb_convert_encoding($cleared, 'HTML-ENTITIES', "UTF-8");
        $dom = new DOMDocument();
        $dom->loadHTML($cleared);
        $tables = $dom->getElementsByTagName('table');
        $rows = $tables->item(0)->getElementsByTagName('tr');
        $prototype = '
        <p class="t-title colorized">@ttitle</p>
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
        foreach ($rows as $row) {
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
                    continue;
                } elseif (preg_match("/.*st1.*/", $cols->item(0)->getAttribute('class'))) {
                    $tmpTable = preg_replace("/@ttitle/", $cols->item(0)->nodeValue, $tmpTable);
                } else {
                    if ($cols->item(3))
                        $tmpTable = preg_replace("/@tbody/", "<tr><td>" . $cols->item(0)->nodeValue . "</td><td>" . $cols->item(1)->nodeValue . "</td><td>" . $cols->item(2)->nodeValue . "</td><td>" . $cols->item(3)->nodeValue . "</td></tr>@tbody", $tmpTable);
                }
            }
        }
        array_push($separatedTables, $tmpTable);
        foreach ($separatedTables as $i => $tab) {
            $separatedTables[$i] = preg_replace("/@tbody/", "", $tab);
        }

        return $separatedTables;
    }

}
<?php

class Responsive
{
    public static function substitutes($file)
    {
        return Responsive::clear("http://szkola.zse.edu.pl/zastepstwa/" . $file);
    }

    public static function plan($file, $religia){
        return Responsive::clear("http://szkola.zse.edu.pl/plany/" . $file, $religia);
    }

    private static function clear($url, $religia=false){
        $cleared = preg_replace("/<\/?nobr>/i", "", file_get_contents($url));
        $cleared = mb_convert_encoding($cleared, 'HTML-ENTITIES', "UTF-8");
        $dom = new DOMDocument();
        // if ($religia) {
        //     $pattern_long = '{                          # recursive regex to capture contents of "main" DIV
        //         (<div\s+class="WordSection1"\s*>        # match the "main" class DIV opening tag
        //           (                                     # capture "main" DIV contents into $1
        //             (?:                                 # non-cap group for nesting * quantifier
        //               (?: (?!<div[^>]*>|</div>). )++    # possessively match all non-DIV tag chars
        //             |                                   # or 
        //               <div[^>]*>(?1)</div>              # recursively match nested <div>xyz</div>
        //             )*                                  # loop however deep as necessary
        //           )                                     # end group 1 capture
        //         </div>)                                 # match the "main" class DIV closing tag
        //         }six';  // single-line (dot matches all), ignore case and free spacing modes ON
        //     if(preg_match($pattern_long, $cleared, $match)){
        //         die($match[1]);
        //     }
        //     print_r($match);
        //     return;
        // }
        $dom->loadHTML($cleared);
        $tables = $dom->getElementsByTagName('table');
        while ($tables->item(0)->hasAttributes())
            $tables->item(0)->removeAttributeNode($tables->item(0)->attributes->item(0));
        return $dom->saveHTML($tables->item(0));
    }

}
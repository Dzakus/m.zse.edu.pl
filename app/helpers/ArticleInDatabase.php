<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 09.06.14
 * Time: 14:24
 */
class ArticleInDatabase
{
    static function find($title, $view)
    {
		$oId = DB::select('select id_srodek from artykul where tytul = ? AND ghost = 0', array($title));

        return View::make($view)
        ->with('article', DB::select('select srodek from artykul_srodek where id = ? and ghost = 0', array($oId[0]->id_srodek))[0]->srodek)
        ->with('kategorie', Kategorie_Newsy::all());
    }
} 
<?php

class NewsesController extends BaseController{
    function index($kat = 1){
        $news = DB::table('newsy')
            ->join('newsy_tresci', 'newsy.id_tresci', '=', 'newsy_tresci.id')
            ->where('id_kategorii', '=', $kat)
            ->where('newsy.ghost', '=', 0)
            ->whereNotNull('newsy_tresci.id');
            // dd($news->get());
        return View::make('news.index')
            ->with('news', $news
                ->orderBy('data', 'desc')
                ->paginate(7))
            ->with('kategorie', Kategorie_Newsy::all());
    }
    function show($id){
        $news = News::find($id);
        Event::fire('news.viewed', array($news));
        return View::make('news.show')->with('news', $news)->with('kategorie', Kategorie_Newsy::all());
    }
}
<?php

class NewsesController extends BaseController{
    function index($kat = 1){
        return View::make('news.index')
            ->with('news', News::whereRaw("id_kategorii = $kat and ghost = 0")
            ->orderBy('data', 'desc')
            ->paginate(7))
            ->with('kategorie', Kategorie_Newsy::all());
    }
    function show($id){
        return View::make('news.show')->with('news', News::find($id))->with('kategorie', Kategorie_Newsy::all());
    }
}
<?php

class CanteenController extends BaseController{
    function index(){
        $canteenId = DB::select('select id_srodek from artykul where tytul = ?', array("Kantyna"));

        return View::make('canteen.index')
        ->with('canteen', DB::select('select srodek from artykul_srodek where id = ?', array($canteenId[0]->id_srodek))[0]->srodek)
        ->with('kategorie', Kategorie_Newsy::all());
    }
}
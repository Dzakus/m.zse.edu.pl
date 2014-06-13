<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 13.06.14
 * Time: 09:43
 */

class SubstitutesController extends BaseController{
    function index(){
        return View::make('substitutes.index')
            ->with('sub', Substitute::whereRaw("id > 0")
                ->orderBy('data', 'desc')->first())
            ->with('kategorie', Kategorie_Newsy::all());
    }
} 
<?php

class PlanController extends BaseController{
    function index(){
        return View::make('plan.index')
            ->with('plan', Plan::all())
            ->with('kategorie', Kategorie_Newsy::all());
    }
    function show($klasa){
        $plany = Plan::all();
        $plan = Plan::where('klasa', '=', $klasa)->get()->first();
        if(count($plan)){
            return View::make('plan.show')->with('plan', $plan)->with('plany', $plany)->with('kategorie', Kategorie_Newsy::all());
        }else{
            // zwracać, że nie ma takiej klasy
        }
    }
}
<?php

class PlanController extends BaseController{
    function index(){
        return View::make('plan.index')
            ->with('plany', Plan::whereRaw('ghost = 0')->get())
            ->with('kategorie', Kategorie_Newsy::all());
    }
    function show($klasa){
        $plany = Plan::all();
        $plan = Plan::whereRaw('klasa = ? and ghost = 0', array($klasa))->get()->first();
        if(count($plan)){
            return View::make('plan.show')->with('plan', $plan)->with('plany', $plany)->with('kategorie', Kategorie_Newsy::all());
        }else{
            return View::make('plan.notFound')->with('plany', $plany)->with('kategorie', Kategorie_Newsy::all())->with('notFound', $klasa);
        }
    }
}
<?php

class NewsesController extends BaseController{
    function index(){
        return View::make('news.index')->with('news', News::orderBy('data', 'DESC')->paginate(5));
    }
} 
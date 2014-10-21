<?php

class CanteenController extends BaseController{
    function index(){
        return ArticleInDatabase::find('Kantyna', 'canteen.index');
    }
}
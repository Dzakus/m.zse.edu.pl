<?php

class MaturaController extends BaseController{
    function index(){
        return ArticleInDatabase::find('Egzaminy', 'matura.index');
    }
}
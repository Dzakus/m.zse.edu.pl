<?php

class OrganisationController extends BaseController{
    function index(){
        return ArticleInDatabase::find('Organizacja roku', 'organisation.index');
    }
}
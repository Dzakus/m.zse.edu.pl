<?php

Route::get('/', array('as'=>'root', 'uses'=>'NewsesController@index'));
Route::get('/kategoria/{id}', array('as'=>'category', 'uses'=>'NewsesController@index'));
Route::get('news/{id}', array('as'=>'show', 'uses'=>'NewsesController@show'));
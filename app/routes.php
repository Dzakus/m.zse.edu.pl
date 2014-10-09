<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', array('as'=>'root', 'uses'=>'NewsesController@index'));
Route::get('/kategoria/{id}', array('as'=>'category', 'uses'=>'NewsesController@index'));
Route::get('news/{id}', array('as'=>'show', 'uses'=>'NewsesController@show'));
Route::get('zastepstwa', array('as'=>'substitutes', 'uses'=>'SubstitutesController@index'));
Route::get('plan', array('as'=>'plan', 'uses'=>'PlanController@index'));
Route::get('plan/{klasa}', array('as'=>'class', 'uses'=>'PlanController@show'));
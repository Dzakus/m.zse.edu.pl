<?php

Route::get('/', array('as'=>'root', 'uses'=>'NewsesController@index'));


Route::get('dupa', function(){
    return phpinfo();
});
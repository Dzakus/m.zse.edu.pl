<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 09.06.14
 * Time: 09:23
 */

class News extends Eloquent{
    protected $table = 'newsy';
    public $timestamps = false;
    public function tresc(){
        return $this->hasOne('Tresc','id','id_tresci');
    }
    public function kategorie_newsy(){
        return $this->hasOne('Kategorie_Newsy','id','id_kategorii');
    }
} 
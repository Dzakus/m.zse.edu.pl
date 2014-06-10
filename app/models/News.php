<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 09.06.14
 * Time: 09:23
 */

class News extends Eloquent{
    protected $table = 'newsy';
    public function tresc(){
        return $this->hasOne('Tresc','id','id_tresci');
    }
} 
@extends('layouts.main')
@section('add-css')
<!--<link rel="stylesheet" href="{{ URL::to('css/substitutes-responsive.css'); }}">-->
@stop
@section('content')
<?php
foreach (Responsive::substitutes($sub->plik) as $dupa) {
    echo Encoding::fixUTF8(Encoding::toUTF8($dupa)) . "<br>";
//        iconv("Windows-1252","UTF-8", $dupa)."<br>";
}
echo file_get_contents("http://szkola.zse.edu.pl/zastepstwa/f37a735e1fa1b72aa4a1e08eca0e066a57f0f7dc837364189661df8706b6bbfcafdfb20d589bbcb456b88d8368447e59d5522bcf0885f560f7004213ef281371"); ?>
@stop
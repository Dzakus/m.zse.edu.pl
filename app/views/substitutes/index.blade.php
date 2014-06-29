@extends('layouts.main')
@section('add-css')
<!--<link rel="stylesheet" href="{{ URL::to('css/substitutes-responsive.css'); }}">-->
@stop
@section('content')
<?php
foreach (Responsive::substitutes($subs->plik) as $sub) {
    echo $sub . "<br>";
}
?>
@stop
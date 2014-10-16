@extends('layouts.main')
@section('content')
<?php
echo Responsive::substitutes($subs->plik)
?>
@stop
@section('add-css')
<link rel="stylesheet" href="{{ URL::to('css/style.css'); }}">
@stop
@extends('layouts.main')
@section('content')
<div class="row">
<div class="panel panel-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" xmlns="http://www.w3.org/1999/html">
            <div class="panel-heading">
                {{$news->tytul}}
                <span class="badge">{{$news->czytano}}</span>
            </div>
            <div class="panel-body">
                {{Minify::d($news->tresc->tresc)}}
            </div>
            <div class="panel-footer">
                <p class="pull-right"><p class="colorized">{{$news->data}}</p></p>
                <p class="pull-left"><p class="colorized">{{$news->autor}}</p></p>
            </div>
        </div>
</div>
<a class="btn btn-info" href="{{URL::previous()}}">Wróć</a>
@stop
@section('add-css')
<link rel="stylesheet" href="{{ URL::to('css/style.css'); }}">
@stop
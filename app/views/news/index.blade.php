@extends('layouts.main')
@section('content')
    @foreach($news as $n) 
<div class="panel panel-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" xmlns="http://www.w3.org/1999/html">
            <div class="panel-heading">
                {{$n->tytul}}
                <span class="badge">{{$n->czytano}}</span>
            </div>
            <div class="panel-body">
                <a href="{{ URL::route('show', $n->id) }}" class="btn btn-success pull-right">Czytaj więcej</a><br>
            </div>
            <div class="panel-footer">
                <p class="pull-right"><p class="colorized">{{$n->data}}</p></p>
                <p class="pull-left"><p class="colorized">{{$n->autor}}</p></p>
            </div>
        </div>
    @endforeach
    <div class="center-block">
        {{$news->links()}}
    </div>
@stop
@section('add-css')
<link rel="stylesheet" href="{{ URL::to('css/style.css'); }}">
@stop
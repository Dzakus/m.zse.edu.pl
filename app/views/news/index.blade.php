@extends('layouts.main')
@section('content')
    @foreach($news as $n)
<div class="panel panel-primary col-lg-13 col-md-13 col-sm-13 col-xs-13" xmlns="http://www.w3.org/1999/html">
            <div class="panel-heading">
                {{$n->tytul}}
            </div>
            <div class="panel-body">
                <a href="{{ URL::route('show', $n->id) }}" class="btn btn-success pull-right">Czytaj więcej</a><br>
<!--                {{Minify::limit_text(Minify::d($n->tresc->tresc))}}-->
            </div>
            <div class="panel-footer">
                <p class="pull-right"><p class="colorized">{{$n->data}}</p></p>
                <p class="pull-left"><p class="colorized">{{$n->autor}}</p></p>
            </div>
        </div>
    @endforeach
    {{$news->links()}}
@stop
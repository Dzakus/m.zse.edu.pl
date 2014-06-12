@extends('layouts.main')
@section('content')
<div class="row">
    @foreach($news as $n)
<div class="panel panel-primary col-lg-9 col-md-9 col-sm-9 col-xs-9" xmlns="http://www.w3.org/1999/html">
            <div class="panel-heading">
                {{$n->tytul}}
            </div>
            <div class="panel-body">
                <a href="{{ URL::route('show', $n->id) }}" class="btn btn-success pull-right">Czytaj więcej</a><br>
<!--                {{Minify::limit_text(Minify::d($n->tresc->tresc))}}-->
            </div>
            <div class="panel-footer">
                <p class="pull-right">{{$n->data}}</p>
                <p class="pull-left"><p class="colorized">{{$n->autor}}</p></p>
            </div>
        </div>
    @endforeach
</div>
    {{$news->links()}}
@stop
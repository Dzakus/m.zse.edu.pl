@extends('layouts.main')
@section('content')

    @foreach($news as $n)
        <div class="panel panel-primary col-lg-9 col-md-9 col-sm-9 col-xs-9">
            <div class="panel-heading">
                <h3 class="panel-title">{{$n->tytul}}</h3>
            </div>
            <div class="panel-body">
                {{Minify::d($n->tresc->tresc)}}
            </div>
            <div class="panel-footer">{{$n->data}}</div>
        </div>

    @endforeach
    {{$news->links()}}
@stop
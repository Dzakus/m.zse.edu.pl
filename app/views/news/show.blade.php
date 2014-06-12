@extends('layouts.main')
@section('content')
<div class="row">
<div class="panel panel-primary col-lg-9 col-md-9 col-sm-9 col-xs-9" xmlns="http://www.w3.org/1999/html">
            <div class="panel-heading">
                {{$news->tytul}}
            </div>
            <div class="panel-body">
                {{Minify::d($news->tresc->tresc)}}
            </div>
            <div class="panel-footer">
                <p class="pull-right">{{$news->data}}</p>
                <p class="pull-left"><p class="colorized">{{$news->autor}}</p></p>
            </div>
        </div>
</div>
<a class="btn btn-info" href="{{URL::previous()}}">Back</a>
@stop
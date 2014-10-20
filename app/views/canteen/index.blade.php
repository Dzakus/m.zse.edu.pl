@extends('layouts.main')
@section('content')
    {{$canteen}}
@stop
@section('add-css')
<link rel="stylesheet" href="{{ URL::to('css/style-canteen.css'); }}">
@stop
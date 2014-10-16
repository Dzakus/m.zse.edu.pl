@extends('layouts.main')
@section('content')
	<div class="container">
	    {{$canteen}}
    </div>
@stop
@section('add-css')
<link rel="stylesheet" href="{{ URL::to('css/style-canteen.css'); }}">
@stop
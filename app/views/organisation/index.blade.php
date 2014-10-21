@extends('layouts.main')
@section('content')
    {{$article}}
@stop
@section('add-css')
<link rel="stylesheet" href="{{ URL::to('css/style.css'); }}">
@stop
@section('add-js')
<script type="text/javascript">
	$(".container .row div").addClass("row").removeAttr('style');
</script>
@stop
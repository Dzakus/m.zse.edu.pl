@extends('layouts.main')
@section('content')
    {{Minify::d($article)}}
@stop
@section('add-css')
<link rel="stylesheet" href="{{ URL::to('css/style.css'); }}">
@stop
@section('add-js')
<script type="text/javascript">
	$(".container .row p").removeAttr('style');
</script>
@stop
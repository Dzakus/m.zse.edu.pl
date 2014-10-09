@extends('layouts.main')
@section('content')
    <div class="btn-group">
    @foreach($plan as $p)
    	@if ($p->ghost == 1 || $p->klasa == "Religia")
	    	<a href="{{ URL::route('class', $p->klasa) }}" type="button" class="btn btn-<?php if($p->klasa == $plan->klasa) echo 'default'; else echo 'primary'?>">{{$p->klasa}}</a>
		@endif
	@endforeach
	</div>
@stop
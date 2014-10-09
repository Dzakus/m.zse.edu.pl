@extends('layouts.main')
@section('content')
	<div class="container">
	    <div class="btn-group">
		    @foreach($plany as $p)
		    @if ($p->ghost == 0)
		    	<a href="{{ URL::route('class', $p->klasa) }}" type="button" class="btn btn-<?php if($p->klasa == $plan->klasa) echo 'default'; else echo 'primary'?>">{{$p->klasa}}</a>
			@endif
			@endforeach
		</div>
	    <?php
	    echo $plan->klasa;
	    	echo Responsive::plan($plan->plik, preg_match("/.*religia.*/", strtolower($plan->klasa)));
	    ?>
    </div>
@stop
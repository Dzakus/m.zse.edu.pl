@extends('layouts.main')
@section('content')
	<div class="plan">
		    @foreach($plany as $p)
			    	@if($p->ghost == 0)
				    	<a 
				    	href="{{ URL::route('class', $p->klasa) }}" 
				    	type="button" 
				    	class="btn btn-<?php 
				    	if (isset($plan)) {
				    		if($p->klasa == $plan->klasa){
				    			echo 'default'; 
				    		}
					    	else {
					    		echo 'primary';
					    	}
				    	}else{
				    		echo 'primary'; 
				    	}
				    	
				    	?>">
				    		{{$p->klasa}}
				    	</a>
			    	@endif
			@endforeach
			
	</div>
	@yield('plan')
@stop
@section('add-css')
<link rel="stylesheet" href="{{ URL::to('css/style.css'); }}">
@stop
@extends('plan.index')
@section('plan')
	    <?php
	    	echo "<h3>".$plan->klasa."</h3>";
	    	echo Responsive::plan($plan->plik, preg_match("/.*religia.*/", strtolower($plan->klasa)));
	    ?>
	    <div class="mobile"></div>
@stop
@extends('layouts.main')
@section('content')
<!--<div class="table-responsive">-->
{{ print_r(Responsive::table($sub->plik)) }}
<!--</div>-->
@stop
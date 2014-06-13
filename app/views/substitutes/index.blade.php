@extends('layouts.main')
@section('content')
<div class="table-responsive">
    {{ dd(Minify::table_responsive($sub->plik)) }}
</div>
@stop
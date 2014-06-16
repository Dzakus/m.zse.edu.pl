@extends('layouts.main')
@section('content')
<div class="table-responsive">
    {{ print_r(Minify::table_responsive($sub->plik)) }}
</div>
@stop
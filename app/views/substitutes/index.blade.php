@extends('layouts.main')
@section('content')
<div class="table-responsive">
    {{ Responsive::table($sub->plik)[0] }}
</div>
@stop
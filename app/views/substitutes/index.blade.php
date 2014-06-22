@extends('layouts.main')
@section('add-css')
<link rel="stylesheet" href="{{ URL::to('css/substitutes-responsive.css'); }}">
@stop
@section('content')
<!--    {{ print_r(Responsive::table($sub->plik)) }}-->
<table class="substitutes-responsive">
    <thead>
    <tr>
        <th>Lekcja</th>
        <th>Opis</th>
        <th>Zastępca</th>
        <th>Uwagi</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td data-title="Lekcja">5</td>
        <td data-title="Opis">2 A(2) - Uczniowie zwolnieni do domu</td>
        <td data-title="Zastępca">&nbsp;</td>
        <td data-title="Uwagi">&nbsp;</td>
    </tr>
    <tr>
        <td data-title="Lekcja">5</td>
        <td data-title="Opis">2 A(2) - Uczniowie zwolnieni do domu</td>
        <td data-title="Zastępca">&nbsp;</td>
        <td data-title="Uwagi">&nbsp;</td>
    </tr>
    <tr>
        <td data-title="Lekcja">5</td>
        <td data-title="Opis">2 A(2) - Uczniowie zwolnieni do domu</td>
        <td data-title="Zastępca">&nbsp;</td>
        <td data-title="Uwagi">&nbsp;</td>
    </tr>
    </tbody>
</table>
@stop
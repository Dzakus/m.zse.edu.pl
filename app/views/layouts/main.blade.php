<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <meta name="description" content="">

    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic-ext,latin-ext,cyrillic'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.min.css">
    <link href="{{ URL::to('css/jquery.mmenu.css'); }}" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('bootstrap/css/bootstrap.min.css'); }}">
    <link rel="stylesheet" href="{{ URL::to('css/style.css'); }}">
    <!--<link rel="stylesheet" href="{{ URL::to('css/tablesaw.css'); }}">-->

    @yield('add-css')
    <script type="text/javascript" src="http://oss.maxcdn.com/libs/modernizr/2.6.2/modernizr.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<a id="hamburger" class="mm-fixed-top" href="#my-menu">
<span></span>
</a>

<div id="my-header" class="mm-fixed-top">
    <div id="navbar-brand" href="#"></div>
</div>

<div id="lazy" class="content">
    @yield('content')
    <a href="http://www.zse.edu.pl"><i class="fa fa-desktop"></i>    Idź na pełną</a>
</div>
@include('layouts.menu')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js'); }}"></script>
<script src="{{ URL::to('js/jquery.mmenu.min.all.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ URL::to('js/pushmany.js') }}"></script>
<!--<script type="text/javascript" src="{{ URL::to('js/tablesaw.js') }}"></script>-->
@yield('add-js')
</body>
</html>

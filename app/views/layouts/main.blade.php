<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZSEiI w Sosnowcu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Strona mobilna Zespołu Szkół Elektronicznych i Informatycznych w Sosnowcu">
    <meta name="author" content="Kamil Prościewicz">
    <meta name="author" content="Adrian Cieniuch">
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic-ext,latin-ext,cyrillic'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('bootstrap/css/bootstrap.css'); }}">
    @yield('add-css')
    <script type="text/javascript" src="http://oss.maxcdn.com/libs/modernizr/2.6.2/modernizr.min.js"></script>
</head>
<body>
@include('layouts.menu')
<div class="container">
    <div class="row">
        @yield('content')
    </div>
    <div class="center-block">
        <a href="http://www.zse.edu.pl">
            <i class="fa fa-desktop"></i>&nbsp;Pełna wersja strony
        </a>
    </div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::to('bootstrap/js/bootstrap.min.js'); }}"></script>
@yield('add-js')
</body>
</html>

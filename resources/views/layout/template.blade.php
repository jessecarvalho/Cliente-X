<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente X</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("style/style.css")}}">
    <link rel="stylesheet" href="{{asset("font/icofont.min.css")}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light text-center fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
       <i class="icofont-doctor-alt"></i> Cliente X
    </button>
    <div class="collapse navbar-collapse row align-items-center justify-content-center" id="navbarSupportedContent">
        <a class="navbar-brand" href="{{route('welcome')}}" id="logo"><i class="icofont-doctor-alt"></i> Cliente X</a>
        <ul class="navbar-nav fixed">
            <li class="nav-item"> <a class="nav-link" href="{{route('welcome')}}">Inicio</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#about">Sobre</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#contact">Contato</a> </li>
        </ul>
    </div>
</nav>
@yield('content')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset("js/jquery.mask.min.js")}}"></script>
<script src="{{asset("js/scripts.js")}}"></script>
</body>
</html>

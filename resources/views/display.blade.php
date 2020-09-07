@extends('layout.template')
@section('content')
    <div class="containerEmail">
        <div class="displayEmail">
            <i class="icon {{$infos[2]}}"></i>
            <h1>{{$infos[0]}}</h1>
            <h2>{{$infos[1]}}</h2>
            <a href="{{route('welcome')}}"><button class="btn btn-back">Voltar para site</button></a>
        </div>
    </div>
@endsection();

@extends('layouts.main')
@section('title','HDC Events')

    @section('content')
       <h1>Algum titulo</h1>
       <img src="/img/banner.jpg" alt="banner">
       @if(10>5)
         <p>A condição é true</p>
         @endif

         <p>{{$nome}}</p>
         @for($i=0; $i < count($arr); $i++)
          <p>{{ $arr[$i]}}</p>
         @endfor

@endsection

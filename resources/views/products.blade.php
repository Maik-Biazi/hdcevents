@extends ('layouts.main')

@section('title','produtos')

@section('content')

    <h1>Tela de produtos</h1>
    @if ($busca != null)
    <p>O usuario esta buscando por: {{$busca}}</p>
    @endif
@endsection
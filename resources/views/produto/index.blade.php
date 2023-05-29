@extends('layout.app')
    @section('main')

    <ul>
        @foreach ($produtos as $produto)
            <li>{{$produto -> PRODUTO_NOME}} - {{$produto->PRODUTO_PRECO}}</li>
        @endforeach
    </ul>

@endsection

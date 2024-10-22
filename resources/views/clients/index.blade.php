@extends('app')
@section('tittle', 'Lista de Clientes')

@section('content')
    <h1>Lista de Clientes</h1>
    <table class="table">
        <thead>
            <td>ID</td>
            <td>Nome</td>
            <td>Endereço</td>
            <td>Ações</td>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td><a href="{{route('clients.show', $client)}}">{{$client->nome}}</a></td>
                    <td>{{$client->endereco}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('clients.create') }}" class="btn btn-success">Novo Cliente</a>
@endsection

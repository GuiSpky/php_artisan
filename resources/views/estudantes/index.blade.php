@extends('app')
@section('tittle', 'Lista de Alunos')

@section('content')
    <h1>Lista de Alunos</h1>
    <table class="table">
        <thead>
            <td>ID</td>
            <td>Nome</td>
            <td>CPF</td>
            <td>Ações</td>
        </thead>
        <tbody>
            @foreach ($estudantes as $estudante)
                <tr>
                    <td>{{$estudante->id}}</td>
                    <td><{{$estudante->nome}}</td>
                    <td>{{$estudante->cpf}}</td>
                    <td>{{$estudante->nascimento}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('estudantes.create') }}" class="btn btn-success">Novo Aluno</a>
@endsection

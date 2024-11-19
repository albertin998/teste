@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Empréstimo</h1>

    <form action="{{ route('emprestimos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="usuario_id">Usuário</label>
            <select class="form-control" name="usuario_id" id="usuario_id" required>
                <option value="">Selecione um usuário</option>
                @foreach ($usuarios as $usuario) <!-- Alteração de users para usuarios -->
                    <option value="{{ $usuario->id }}">{{ $usuario->name }}</option> <!-- Alteração de user para usuario -->
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="livro_id">Livro</label>
            <select class="form-control" name="livro_id" id="livro_id" required>
                <option value="">Selecione um livro</option>
                @foreach ($livros as $livro)
                    <option value="{{ $livro->id }}">{{ $livro->titulo }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="data_devolucao">Data de Devolução</label>
            <input type="date" class="form-control" name="data_devolucao" id="data_devolucao" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar Empréstimo</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Empréstimos</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Usuário</th> <!-- Alteração de User para Usuário -->
                <th>Livro</th>
                <th>Data de Devolução</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($emprestimos as $emprestimo)
                <tr>
                    <td>{{ $emprestimo->usuario->name }}</td> <!-- Alteração de user para usuario -->
                    <td>{{ $emprestimo->livro->titulo }}</td>
                    <td>{{ $emprestimo->data_devolucao }}</td>
                    <td>{{ ucfirst($emprestimo->status) }}</td>
                    <td>
                        <form action="{{ route('emprestimos.atualizarStatus', [$emprestimo->id, 'atrasado']) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-warning">Marcar como Atrasado</button>
                        </form>
                        <form action="{{ route('emprestimos.atualizarStatus', [$emprestimo->id, 'devolvido']) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success">Marcar como Devolvido</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

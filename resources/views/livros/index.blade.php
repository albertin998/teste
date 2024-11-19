<!DOCTYPE html>
<html>
<head>
    <title>Livros</title>
</head>
<body>
    <h1>Livros</h1>
    <a href="{{ route('livros.create') }}">Adicionar Livro</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Autor</th>
                <th>Situação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livros as $livro)
                <tr>
                    <td>{{ $livro->nome }}</td>
                    <td>{{ $livro->autor }}</td>
                    <td>{{ $livro->situacao }}</td>
                    <td>
                        <a href="{{ route('livros.edit', $livro->id) }}">Editar</a>
                        <form action="{{ route('livros.destroy', $livro->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

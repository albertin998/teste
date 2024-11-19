<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
</head>
<body>
    <h1>Editar Livro</h1>
    <form action="{{ route('livros.update', $livro->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nome">Nome do Livro:</label>
        <input type="text" id="nome" name="nome" value="{{ $livro->nome }}" required><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" value="{{ $livro->autor }}" required><br>

        <label for="numero_registro">Número de Registro:</label>
        <input type="text" id="numero_registro" name="numero_registro" value="{{ $livro->numero_registro }}" required><br>

        <label for="situacao">Situação:</label>
        <select id="situacao" name="situacao" required>
            <option value="Disponível" {{ $livro->situacao == 'Disponível' ? 'selected' : '' }}>Disponível</option>
            <option value="Emprestado" {{ $livro->situacao == 'Emprestado' ? 'selected' : '' }}>Emprestado</option>
        </select><br>

        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="genero" value="{{ $livro->genero }}" required><br>

        <button type="submit">Salvar Alterações</button>
    </form>
    <a href="{{ route('livros.index') }}">Voltar à lista de livros</a>
</body>
</html>

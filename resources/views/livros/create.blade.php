<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
</head>
<body>
    <h1>Cadastrar Novo Livro</h1>
    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <label for="nome">Nome do Livro:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>

        <label for="numero_registro">Número de Registro:</label>
        <input type="text" id="numero_registro" name="numero_registro" required><br>

        <label for="situacao">Situação:</label>
        <select id="situacao" name="situacao" required>
            <option value="Disponível">Disponível</option>
            <option value="Emprestado">Emprestado</option>
        </select><br>

        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="genero" required><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>

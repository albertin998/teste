<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;


class LivroController extends Controller
{
    public function index()
{
    $livros = Livro::all();
    return view('livros.index', compact('livros'));
}

public function create()
{
    return view('livros.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'nome' => 'required',
        'autor' => 'required',
        'numero_registro' => 'required|unique:livros',
        'situacao' => 'required',
        'genero' => 'required',
    ]);

    Livro::create($validated);
    return redirect()->route('livros.index');
}

public function edit(Livro $livro)
{
    return view('livros.edit', compact('livro'));
}

public function update(Request $request, Livro $livro)
{
    $validated = $request->validate([
        'nome' => 'required',
        'autor' => 'required',
        'numero_registro' => 'required|unique:livros,numero_registro,' . $livro->id,
        'situacao' => 'required',
        'genero' => 'required',
    ]);

    $livro->update($validated);
    return redirect()->route('livros.index');
}

public function destroy(Livro $livro)
{
    $livro->delete();
    return redirect()->route('livros.index');
}



}

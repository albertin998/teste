<?php

namespace App\Http\Controllers;

use App\Models\Emprestimo;
use App\Models\Livro;
use App\Models\Usuario; 
use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
    
    public function create()
    {
        $usuarios = Usuario::all(); 
        $livros = Livro::all();
        return view('emprestimos.create', compact('usuarios', 'livros'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'livro_id' => 'required|exists:livros,id',
            'data_devolucao' => 'required|date',
        ]);

        Emprestimo::create([
            'usuario_id' => $request->usuario_id, 
            'livro_id' => $request->livro_id,
            'data_devolucao' => $request->data_devolucao,
        ]);

        return redirect()->route('emprestimos.index')->with('success', 'Empréstimo registrado com sucesso!');
    }

   
    public function index()
    {
        $emprestimos = Emprestimo::with(['usuario', 'livro'])->get(); 
        return view('emprestimos.index', compact('emprestimos'));
    }

   
    public function updateStatus($id, $status)
    {
        $emprestimo = Emprestimo::findOrFail($id);
        $emprestimo->status = $status;
        $emprestimo->save();

        return back()->with('success', 'Status do empréstimo atualizado!');
    }
}



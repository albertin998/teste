<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\EmprestimoController;

use Illuminate\Support\Facades\Route;



Route::resource('usuarios', UsuarioController::class);
Route::resource('livros', LivroController::class);
Route::resource('emprestimos', EmprestimoController::class);
Route::patch('emprestimos/{id}/status/{status}', [EmprestimoController::class, 'updateStatus'])
    ->name('emprestimos.atualizarStatus');

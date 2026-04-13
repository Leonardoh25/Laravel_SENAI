<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliotecaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biblioteca/listar', [BibliotecaController::class, 'listar'])->name('biblioteca.listar');

Route::get('/biblioteca/cadastrar', function(){
    return view('cadastro');
})->name('biblioteca.cadastro');

Route::post('/produto/salvar', [BibliotecaController::class, 'add'])->name('produto.salvar');

Route::get('/produto/{id}/atualizar', [BibliotecaController::class, 'atualizar'])->name('produto.atualizar');

Route::put('/produto/{id}/update', [BibliotecaController::class, 'update'])->name('produto.update');















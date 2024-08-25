<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;




// Route::get('/', function () {
//     echo "mensagem";
//     return view('welcome');
// });
Route::get('/', [PessoaController::class, "homepage"])->name('dashboard.view');
Route::get('/cadastro', [PessoaController::class, "formCadastro"])->name('pessoa-cadastro');


Route::get('/editar/{pessoa}', [PessoaController::class, "editarPessoa"])->name('pessoa.edit');
Route::put('/pessoa-update/{pessoa}', [PessoaController::class, "updatePessoa"])->name("pessoa.update");
Route::delete('/pessoa-delete/{pessoa}', [PessoaController::class, "deletePessoa"])->name("pessoa.delete");

Route::post('/cadastro', [PessoaController::class, "cadastrar"])->name('pessoa.cadastro');

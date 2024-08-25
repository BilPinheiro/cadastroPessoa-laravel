<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pessoa as RequestsPessoa;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public  function homepage()
    {
        $pessoas = Pessoa::orderBy('id')->get();

        return view("index", [
            'pessoas' => $pessoas
        ]);
    }
    public  function formCadastro()
    {

        return view("cadastro", []);
    }
    public  function cadastrar(RequestsPessoa $request)
    {
        $request->validated();
        Pessoa::create($request->all());
        return redirect()->route('dashboard.view')->with('sucess', 'Pessoa cadastrada com Sucesso');
    }

    public function editarPessoa(Pessoa $pessoa)
    {
        return view("editar", ['pessoa' => $pessoa]);
    }


    public function updatePessoa(RequestsPessoa $request, Pessoa $pessoa)
    {
        $request->validated();
        $pessoa->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'cpf' => $request->cpf,
        ]);

        return redirect()->route('dashboard.view')->with('sucess', 'Pessoa alterada com Sucesso');
    }
    public function deletePessoa(Pessoa $pessoa)
    {
        $pessoa->delete();
        return redirect()->route('dashboard.view')->with('sucess', 'Pessoa deletada com Sucesso');
    }
}

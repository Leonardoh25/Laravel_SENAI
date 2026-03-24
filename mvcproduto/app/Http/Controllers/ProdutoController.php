<?php

namespace App\Http\Controllers;
use App\Models\Produto;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function listar(){
        $query = Produto::query();
        $produtos = $query->get();
        return view('listar', compact('produtos'));
    }
    
    public function add(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|string|max:255',
            'preco' => 'required|string|max:255'
        ]);

        Produto::create([
            'nome' => $request->nome,
            'quantidade' => $request->quantidade,
            'preco' => $request->preco
        ]);

        return redirect()->back()->with('sucess','Produto cadastrado com sucesso!');
    }

    public function atualizar($id){
        $aluno = Aluno::findOrFail($id);
        return view('atualizar', compact('aluno'));
    }

    public function update($request, $id){
        $request->validate([
            'nome' => 'required|string|max:255',
            'quantidade' => 'required|string|max:255',
            'preco' => 'required|string|max:255'
        ]);

        $produto = Produto::findOrFail($id);

        $produto->nome = $request->nome;
        $produto->quantidade = $request->quantidade;
        $produto->preco = $request->preco;

        $produto->save();
        return redirect()->back('success','Produto atualizado com sucesso!');
    }
}
?>
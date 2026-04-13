<?php

namespace App\Http\Controllers;
use App\Models\Biblioteca;

use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function listar(){
        $query = Biblioteca::query();
        $biblioteca = $query->get();
        return view('listar', compact('biblioteca'));
    }

    public function add(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'paginas' => 'required|string|max:255',
            'publicacao' => 'required|string|max:255',
            'setores' => 'required|string|max:255',
            'custo' => 'required|string|max:255',
            'preço' => 'required|string|max:255',
            'inposto' => 'required|string|max:255'
        ]);

        Biblioteca::create([
            'nome' => $request->nome,
            'autor' => $request->autor,
            'descricao' => $request->descricao,
            'paginas' => $request->paginas,
            'publicacao' => $request->publicacao,
            'setores' => $request->setores,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'inposto' => $request->preco
        ]);

        return redirect()->back()->with('sucess', 'Produto cadastrado com sucesso!');
    }

    public function atualizar($id){
        $biblioteca = Biblioteca::findOrFail($id);
        return view('atualizar', compact('produto'));
    }

    public function update($request, $id){
        $request->validate([
            'nome' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'paginas' => 'required|string|max:255',
            'publicacao' => 'required|string|max:255',
            'setores' => 'required|string|max:255',
            'custo' => 'required|string|max:255',
            'preço' => 'required|string|max:255',
            'inposto' => 'required|string|max:255'
            
        ]);

        $biblioteca = Biblioteca::findOrFail($id);

        $biblioteca->nome = $request->nome;
        $biblioteca->autor = $request->autor;
        $biblioteca->descricao = $request->descricao;
        $biblioteca->paginas = $request->paginas;
        $biblioteca->publicacao = $request->publicacao;
        $biblioteca->setores = $request->setores;
        $biblioteca->custo = $request->custo;
        $biblioteca->preco = $request->preco;
        $biblioteca->inposto = $request->inposto;

        $biblioteca->save();
        return redirect()->back('success','Biblioteca atualizada com sucesso!');
    }
}
?>
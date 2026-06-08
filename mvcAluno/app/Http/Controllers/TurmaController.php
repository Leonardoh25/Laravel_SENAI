<?php

namespace App\Http\Controllers;
use App\Models\Turma;

use Illuminate\Http\Request;

class TurmaController extends Controller
{
 
    public function add(Request $request){
        
        $request->validate([
            'numSala' => 'required|numeric|max:255',
            'Serie'=> 'required|string|max:255|unique:turmas,Serie'
        ]);

        Turma::create([
            'numSala' => $request->numSala,
            'Serie' => $request->Serie
        ]);

        return redirect()->back()->with('success','Turma Cadastrada com sucesso!');
    }

    public function atualizar($id){
        $turma = Turma::findOrFail($id); // Busca o turma pelo ID
        // select * from turmas where id = $id
        return view('atualizar', compact('turma'));
    }

    public function update($request, $id){
        $request->validate([
            'numSala' => 'required|string|max:255',
            'Serie' => "required|string|max:255|unique:turmas,email,$id"
        ]);

        $turma = turma::findOrFail($id);

        $turma->numSala = $request->numSala;
        $turma->Serie = $request->Serie;

        $turma->save();
        return redirect()->back('success','Turma atualizado com sucesso');

    }

    public function deletar($id){
        $turma = Turma::finOrFail($id); //Buscar o turma para depois deletar
        $turma->deletar();

        return redirect()->route('turma.listar')->with('success','Turma excluido com sucesso!');
    }
}
?>
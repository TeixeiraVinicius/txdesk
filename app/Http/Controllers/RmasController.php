<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rma;

class RmasController extends Controller
{
    public function rmas() {
        $rma = Rma::all();
        return view ('rma', compact('rma'));
    }


    public function adicionarrmas() {
        return view ('rmas.adicionar-rma');
    }

    public function salvar(Request $request) {
        $request->validate([
            'produto' => 'required',
            'fabricante' => 'required',
            'nf' => 'required',
            'status' => 'required',
            'observacao' => 'required'
        ]);


        $rma = new rma;
        $rma -> produto = $request['produto'];
        $rma -> fabricante = $request['fabricante'];
        $rma -> dataabertura = $request['dataabertura'];
        $rma -> nf = $request['nf'];
        $rma -> observacao = $request['observacao'];
        $rma -> status = $request['status'];

        $rma -> save();

        
        return redirect()->route('add.rmas')
        ->with('success', 'RMA criado com sucesso.');
    }

    public function editar($id) {
        $rma = rma::find($id);
        return view('rmas.editar-rma', compact('rma', 'id'));
    }

    public function atualizar(Request $request, $id){
        $request->validate([
            'produto' => 'required',
            'fabricante' => 'required',
            'nf' => 'required',
            'status' => 'required',
            'observacao' => 'required'
        ]);

        
        $rma = rma::find($id);
        $rma -> produto = $request['produto'];
        $rma -> fabricante = $request['fabricante'];
        $rma -> datacompra = $request['datacompra'];
        $rma -> nf = $request['nf'];
        $rma -> observacao = $request['observacao'];
        $rma -> status = $request['status'];

        $rma -> save();


        return redirect()->route('rma')
        ->with('success', 'RMA editado com sucesso.');
    }

    public function deletar($id) {
        $rma = rma::find($id);
        $rma -> delete();
        
        return redirect()->route('rma')
        ->with('success', 'RMA excluído com sucesso.');
    }

    public function buscar(Request $request) {
        $rma = rma::where('status', 'LIKE', "%{$request->pesquisar}%")
            ->orWhere('nf', $request->pesquisar)
            ->orWhere('produto', 'LIKE', "%{$request->pesquisar}%")
            ->orWhere('fabricante', 'LIKE', "%{$request->pesquisar}%")
            ->orWhere('id', $request->pesquisar)
            ->paginate();

        return view ('rma', compact('rma'));

    }

}



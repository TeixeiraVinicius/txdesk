<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamado;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;


class ChamadosController extends Controller
{
    public function chamados() {
        $chamado = Chamado::all();
        return view ('chamados', compact('chamado'));
    }


    public function adicionarchamados() {
        return view ('chamados.adicionar-chamado');
    }

    public function visualizarchamados($id) {
        $chamado = Chamado::find($id);

        return view ('chamados.visualizar-chamado', compact('chamado'));
        
    }

    public function salvar(Request $request) {
        $request->validate([
            'nome' => 'required',
            'pedido' => 'required',
            'loja' => 'required',
            'categoria' => 'required',
            'produto' => 'required',
            'datacompra' => 'required',
            'dataabertura' => 'required',
            'sla' => 'required',
            'ocorrencia' => 'required',
            'status' => 'required'
        ]);


       Chamado::create($request->all());

        
        return redirect()->route('add.chamados')
        ->with('success', 'Chamado criado com sucesso.');
    }

    public function editar($id) {
        $chamado = chamado::find($id);
        return view('chamados.editar-chamado', compact('chamado', 'id'));
    }

    public function atualizar(Request $request, $id){
          $request->validate([
            'nome' => 'required',
            'pedido' => 'required',
            'loja' => 'required',
            'categoria' => 'required',
            'produto' => 'required',
            'datacompra' => 'required',
            'dataabertura' => 'required',
            'sla' => 'required',
            'ocorrencia' => 'required',
            'status' => 'required'
        ]);

        
        $chamado = chamado::find($id);
        $chamado -> nome = $request['nome'];
        $chamado -> pedido = $request['pedido'];
        $chamado -> loja = $request['loja'];
        $chamado -> categoria = $request['categoria'];
        $chamado -> produto = $request['produto'];
        $chamado -> datacompra = $request['datacompra'];
        $chamado -> dataabertura = $request['dataabertura'];
        $chamado -> datavistoria = $request['datavistoria'];
        $chamado -> sla = $request['sla'];
        $chamado -> ocorrencia = $request['ocorrencia'];
        $chamado -> parecer = $request['parecer'];
        $chamado -> resolucao = $request['resolucao'];
        $chamado -> status = $request['status'];

        $chamado -> save();


        return redirect()->route('chamados')
        ->with('success', 'Chamado editado com sucesso.');
    }

    public function deletar($id) {
        $chamado = chamado::find($id);
        $chamado -> delete();
        
        return redirect()->route('chamados')
        ->with('success', 'Chamado excluído com sucesso.');
    }

    public function buscar(Request $request) {
        $chamado = chamado::where('status', 'LIKE', "%{$request->pesquisar}%")
            ->orWhere('pedido', $request->pesquisar)
            ->orWhere('dataabertura', $request->pesquisar)
            ->orWhere('categoria', $request->pesquisar)
            ->orWhere('resolucao', $request->pesquisar)
            ->orWhere('loja', 'LIKE', "%{$request->pesquisar}%")
            ->orWhere('produto', 'LIKE', "%{$request->pesquisar}%")
            ->orWhere('nome', 'LIKE', "%{$request->pesquisar}%")
            ->orWhere('id', $request->pesquisar)
            ->paginate();

        return view ('chamados', compact('chamado'));

    }

}

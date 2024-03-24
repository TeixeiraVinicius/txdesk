<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamado;
use App\Models\Rma;

class DashboardController extends Controller
{
    public function dashboard() 
    {
        $chamadoaberto = Chamado::where('status', 'Aberto')->get()->count();
        $chamadoatendimento = Chamado::where('status', 'Em Atendimento')->get()->count();
        $chamadosconcluido = Chamado::where('status', 'Concluído')->get()->count();

        $colchoes = Chamado::where('categoria', 'Colchão')->get()->count();
        $baus = Chamado::where('categoria', 'Baú')->get()->count();
        $boxes = Chamado::where('categoria', 'Box')->get()->count();

        $rmaaberto = Rma::where('status', 'Aberto')->get()->count();
        $rmaconcluido = Rma::where('status', 'Concluído')->get()->count();

        return view('dashboard', compact('chamadoaberto',
        'chamadoatendimento',
        'chamadosconcluido',
        'colchoes',
        'baus',
        'boxes',
        'rmaaberto',
        'rmaconcluido'
        ));
    }
}

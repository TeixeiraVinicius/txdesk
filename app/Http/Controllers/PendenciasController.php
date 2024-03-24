<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamado;

class PendenciasController extends Controller
{
    public function pendencias()
    {
        $bedpark = Chamado::where('loja', 'Bedstore Park Shopping')->where('status', '<>', 'Concluído')->get();
        $bedmadu = Chamado::where('loja', 'Bedstore Madureira Shopping')->where('status', '<>', 'Concluído')->get();
        $sealypark = Chamado::where('loja', 'Sealy Park Shopping')->where('status', '<>', 'Concluído')->get();
        $sealyame = Chamado::where('loja', 'Sealy Américas Shopping')->where('status', '<>', 'Concluído')->get();
       return view('pendencias', compact('bedpark', 'bedmadu', 'sealypark', 'sealyame'));
    }
}

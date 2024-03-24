<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;
    protected $table = 'chamados';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'pedido', 'loja',
    'categoria', 'produto', 'datacompra', 'dataabertura', 'datavistoria', 
    'sla', 'parecer', 'resolucao', 'status', 'ocorrencia'];
}

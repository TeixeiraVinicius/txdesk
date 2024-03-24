<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rma extends Model
{
    use HasFactory;
    protected $table = 'rmas';
    protected $primaryKey = 'id';
    protected $fillable = ['produto', 'fabricante', 'status', 'dataabertura', 'nf', 'observacao'];

}

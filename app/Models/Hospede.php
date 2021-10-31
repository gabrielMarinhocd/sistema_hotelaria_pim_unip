<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospede extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'celular',
        'endereco',
        'cep',
        'telefone',
        'id_user',
        'status',
    ];
}

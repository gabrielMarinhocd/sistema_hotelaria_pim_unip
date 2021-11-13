<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'idade',
        'hospede_id',
        'status'
    ];

}

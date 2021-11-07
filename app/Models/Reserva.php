<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'valor',
        'registro_saida',
        'registro_entrada',
        'id_hospede',
        'status',
    ];
}

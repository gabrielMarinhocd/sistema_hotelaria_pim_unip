<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'entrada',
        'saida',
        'forma_pagamento',
        'reserva_id',
        'quarto_id'
    ];
}

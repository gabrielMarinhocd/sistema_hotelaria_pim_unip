<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'andar',
        'camas',
        'tv',
        'arcondicionado',
        'descricao',
        'img',
        'status',
    ];

}
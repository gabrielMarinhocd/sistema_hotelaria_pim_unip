<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicos_reserva;

class Servico extends Model
{
    use HasFactory;

    protected $fillable =[
        'categoria',
        'nome',
        'preco',
        'descricao',
        'status',
    ];

    public function servicos_reserva(){
        return  $this->hasMany(Servicos_reserva::class);
    }

}
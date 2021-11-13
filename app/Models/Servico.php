<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva_servico;

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

     public function reserva_servicos(){
        return  $this->belongsToMany('App\Models\Reserva_servico', 'reserva_servicos', 'reserva_id', 'servico_id');
    }



}

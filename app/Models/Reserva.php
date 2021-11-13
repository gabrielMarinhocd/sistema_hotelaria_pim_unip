<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva_servico;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'valor',
        'registro_saida',
        'registro_entrada',
        'hospede_id',
        'status',
    ];


    public function reserva_servicos(){
        return $this->belongsToMany('App\Models\Reserva_servico', 'reserva_servicos', 'reserva_id', 'servico_id');
    }


}

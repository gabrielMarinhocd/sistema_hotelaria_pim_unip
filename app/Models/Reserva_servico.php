<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva_servico extends Model
{
    use HasFactory;

    protected $fillables = [
        'id_reserva',
        'id_servico',
    ];

    public function reservas(){
        return $this->belongsTo(Reserva::class);
    }

    public function servicos(){
        return $this->hasMany('App\Models\Servico');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;
use App\Models\Servico;

class Reserva_servico extends Model
{
    use HasFactory;

    public $table = 'reserva_servicos';

    protected $fillables = [
        'reserva_id',
        'servico_id',
    ];

    public function reservas(){
        return $this->hasMany(Reserva::class, 'reserva_id');
    }

    public function servicos(){
        return $this->hasMany(Servico::class, 'servico_id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;
use App\Models\Servico;

class Servicos_reserva extends Model
{
    use HasFactory;

    protected $fillables = [
        'reserva_id',
        'servico_id',
    ];

    public function reserva(){
        return $this->belongsTo(Reserva::class );
    }

    public function servico(){
        return $this->belongsTo(Servico::class);
    }
}

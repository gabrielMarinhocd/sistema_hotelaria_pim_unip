<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicos_reserva;

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


    public function servicos_reserva(){
        return  $this->hasMany(Servicos_reserva::class);
    }

}

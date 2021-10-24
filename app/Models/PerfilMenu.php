<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_perfil',
        'id_menu'
    ];
}

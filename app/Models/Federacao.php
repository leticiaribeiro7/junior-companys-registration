<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Federacao extends Model
{
    use HasFactory;

    public function empresaJunior(){
        return $this->hasMany(EmpresasJuniores::class);
    }

    protected $table="federacoes";
}

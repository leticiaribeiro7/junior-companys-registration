<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresasJuniores extends Model
{
    use HasFactory;

    public function federacao(){
        return $this->belongsTo(Federacao::class);
    }
    protected $table="empresasjuniores";
}

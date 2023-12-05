<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $primaryKey = ['id', 'pais_id']; // Definimos la clave primaria compuesta

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id');
    }

    public function municipios()
    {
        return $this->hasMany(Municipio::class, ['estado_id', 'pais_id']);
    }
}

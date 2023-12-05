<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = ['id', 'estado_id', 'pais_id']; // Definimos la clave primaria compuesta

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, ['estado_id', 'pais_id']);
    }

    public function parroquias()
    {
        return $this->hasMany(Parroquia::class, ['municipio_id', 'estado_id', 'pais_id']);
    }
}

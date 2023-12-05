<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $primaryKey = ['id', 'municipio_id', 'estado_id', 'pais_id']; // Definimos la clave primaria compuesta

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, ['estado_id', 'pais_id']);
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, ['municipio_id', 'estado_id', 'pais_id']);
    }
}

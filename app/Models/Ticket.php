<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['asunto', 'descripcion', 'parroquia_id', 'user_id', 'status_id'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function parroquia()
    {
        return $this->belongsTo(Parroquia::class, ['parroquia_id', 'municipio_id', 'estado_id', 'pais_id']);
    }
}

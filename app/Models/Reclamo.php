<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    protected $fillable = [
        'id_usuarios',
        'ubicacion',
        'foto',
        'descripcion',
        'id_categoria',
        'id_estado',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuarios');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}

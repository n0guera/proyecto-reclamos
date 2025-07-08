<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['nombre'];

    public function reclamos()
    {
        return $this->hasMany(Reclamo::class, 'id_estado');
    }
}

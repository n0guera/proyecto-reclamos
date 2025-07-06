<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reclamo extends Model
{
    use HasFactory;

    public const ESTADO_PENDIENTE = 'pendiente';
    public const ESTADO_EN_PROCESO = 'en_proceso';
    public const ESTADO_RESUELTO = 'resuelto';
    public const ESTADO_CERRADO = 'cerrado';

    protected $fillable = [
        'descripcion',
        'ubicacion',
        'estado',
        'user_id',
        'categoria_id',
    ];

    //un reclamo pertenece a un usuario.
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //un reclamo pertenece a una categoría.
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function getEstadoTextoAttribute(): string
    {
        return [
            self::ESTADO_PENDIENTE => 'Pendiente',
            self::ESTADO_EN_PROCESO => 'En Proceso',
            self::ESTADO_RESUELTO => 'Resuelto',
            self::ESTADO_CERRADO => 'Cerrado'
        ][$this->estado] ?? $this->estado;
    }
}
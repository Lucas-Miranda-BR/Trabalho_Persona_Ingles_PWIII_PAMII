<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    protected $primaryKey = 'usuario_id';
    protected $fillable = [
        'estado_id', // FK
        'cidade_id', // FK
        'nome',
        'senha',
        'admin'
    ];
    protected $casts = [
        'senha' => 'hashed',
        'admin' => 'boolean'
    ];

    public function estados(): BelongsTo {
        return $this->belongsTo(Estado::class, 'estado_id', 'estado_id');
    }
    public function cidades(): BelongsTo {
        return $this->belongsTo(Cidade::class, 'cidade_id', 'cidade_id');
    }
    public function pedidos(): HasMany {
        return $this->hasMany(Pedido::class, 'usuario_id', 'usuario_id');
    }
}

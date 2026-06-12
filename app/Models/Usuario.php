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
        'nome',
        'senha',
        'admin'
    ];
    protected $casts = [
        'senha' => 'hashed',
        'admin' => 'boolean'
    ];

    public function pedidos(): HasMany {
        return $this->hasMany(Pedido::class, 'usuario_id', 'usuario_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedido';
    protected $primaryKey = 'pedido_id';
    protected $fillable = [
        'usuario_id',
        'valor_total',
        'data_pedido'
    ];
    protected $casts = [
        'data_pedido' => 'datetime'
    ];

    public function usuarios(): BelongsTo{
        return $this->belongsTo(Usuario::class, 'usuario_id', 'usuario_id');
    }

    public function carrinhos(): HasMany{
        return $this->hasMany(Carrinho::class, 'carrinho_id', 'carrinho_id');
    }
}

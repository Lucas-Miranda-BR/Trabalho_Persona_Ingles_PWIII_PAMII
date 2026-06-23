<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carrinho extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'carrinho';
    protected $primaryKey = 'carrinho_id';
    protected $fillable = [
        'pedido_id', // FK
        'produto_id', // FK
        'sub_total',
        'quantidade'
    ];

    public function produtos(): BelongsTo{
        return $this->belongsTo(Produto::class, 'produto_id', 'produto_id');
    }
    public function pedidos(): BelongsTo{
        return $this->belongsTo(Pedido::class, 'pedido_id', 'pedido_id');
    }
}

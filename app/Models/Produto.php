<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produto';
    protected $primaryKey = 'produto_id';
    protected $fillable = [
        'categoria_id', // FK
        'nome',
        'valor',
        'estoque'
    ];

    public function carrinhos(): HasMany{
        return $this->hasMany(Carrinho::class, 'produto_id', 'produto_id');
    }
    public function categorias(): BelongsTo{
        return $this->belongsTo(Categoria::class, 'categoria_id', 'categoria_id');
    }
}

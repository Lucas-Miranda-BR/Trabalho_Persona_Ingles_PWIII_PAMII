<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produto';
    protected $primaryKey = 'produto_id';
    protected $fillable = [
        'nome',
        'valor',
        'categoria',
        'estoque'
    ];

    public function carrinhos(): HasMany{
        return $this->hasMany(Carrinho::class, 'produto_id', 'produto_id');
    }
}

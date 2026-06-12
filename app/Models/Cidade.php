<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cidade extends Model
{
    use HasFactory;
    protected $table = 'cidade';
    protected $primaryKey = 'cidade_id';
    protected $fillable = [
        'nome'
    ];

    public function usuarios(): HasMany {
        return $this->hasMany(Usuario::class, 'cidade_id', 'cidade_id');
    }
}
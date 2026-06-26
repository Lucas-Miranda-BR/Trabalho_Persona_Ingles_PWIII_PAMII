<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'usuario';
    protected $primaryKey = 'usuario_id';
    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'senha',
        'admin'
    ];
    protected $casts = [
        'senha' => 'hashed',
        'admin' => 'boolean'
    ];
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Usuario::create([
            'nome' => 'Administrador',
            'sobrenome' => 'Sistema',
            'email' => 'admin@solemns.com',
            'senha' => 'Admin@123',
            'admin' => true
        ]);
    }
}

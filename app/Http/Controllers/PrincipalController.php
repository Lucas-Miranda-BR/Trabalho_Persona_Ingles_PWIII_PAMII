<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\Produto;

class PrincipalController extends Controller
{
    public function principal()
    {
        return view('principal');
    }

    public function dashboardAdmin(){
        $totalUsuarios = Usuario::count();
        $totalProdutos = Produto::count();
        $produtosForaEstoque = Produto::where('estoque', 0)->count();
        return view('dashboard.dashboard', compact('totalUsuarios', 'totalProdutos', 'produtosForaEstoque'));
    }

    public function erro404()
    {
        return view('fallback.error_404');
    }
}

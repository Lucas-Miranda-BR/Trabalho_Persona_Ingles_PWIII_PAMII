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
        return view('principal', ['produtos' => Produto::all()]);
    }

    public function dashboardAdmin(){
        $totalUsuarios = Usuario::count();
        $totalProdutos = Produto::count();
        $produtosForaEstoque = Produto::where('estoque', 0)->count();
        $totalAdmins = Usuario::where('admin', 1)->count();
        return view('dashboard.dashboard', compact('totalUsuarios', 'totalProdutos','totalAdmins', 'produtosForaEstoque'));
    }

    public function erro404()
    {
        return view('fallback.error_404');
    }
}

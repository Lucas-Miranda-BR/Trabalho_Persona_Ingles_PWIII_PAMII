<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class Principal extends Controller
{
    public function principal()
    {
        return view('principal');
    }

    public function cadastrar()
    {
        return view('cadastro.cadastrar');
    }

    public function login()
    {
        return view('cadastro.login');
    }

    public function compra()
    {
        return view('compra');
    }

    public function usuario()
    {
        return view('usuario');
    }

    public function config()
    {
        return view('config');
    }

    public function dashboard()
    {
        // if (!session('admin')) {
        //     abort(403);
        // }

        return view('admin.dashboard');
    }

    public function autenticar(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        $usuario = Usuario::where('email', $request->email)->first();

        if (!$usuario) {
            return back()->with(
                'erro',
                'Usuário não encontrado.'
            );
        }

        if (!Hash::check($request->senha, $usuario->senha)) {
            return back()->with(
                'erro',
                'Senha incorreta.'
            );
        }

        session([
            'usuario_id' => $usuario->usuario_id,
            'usuario_nome' => $usuario->nome,
            'admin' => $usuario->admin
        ]);

        return redirect()->route('principal');
    }

    public function logout()
    {
        session()->flush();

        return redirect()->route('principal');
    }

    public function erro404()
    {
        return view('erro.404');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Principal extends Controller
{
    public function principal()
    {
        return view('principal');
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

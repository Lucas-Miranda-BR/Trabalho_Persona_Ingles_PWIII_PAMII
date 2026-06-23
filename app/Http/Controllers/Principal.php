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

    public function dashboardAdmin(){
        return view('dashboard.dashboard');
    }

    public function erro404()
    {
        return view('fallback.error_404');
    }
}

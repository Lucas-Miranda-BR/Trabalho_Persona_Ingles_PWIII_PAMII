<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Usuario;

class UsuarioController extends Controller{

    // PUBLICO

    function indexUsuario(){
        return view('usuario.cadastrar');
    }

    function createUsuario(Request $dados){
        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255',
                  'email' => 'required|email|min:3',
                  'senha' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols()]
              ],
              [
                  'nome.required' => 'O campo nome é obrigatório.',
                  'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                  'email.required' => 'O campo email é obrigatório.',
                  'email.min' => 'O campo email deve conter no mínimo 3 caracteres.',
                  'email.max' => 'O campo email deve conter no máximo 255 caracteres.',
                  'senha.required' => 'O campo senha é obrigatorio',
                  'senha.min' => 'O campo senha deve conter no mínimo 8 caracteres',
                  'senha.letters' => 'O campo senha deve conter pelo menos uma letra',
                  'senha.mixedCase' => 'O campo senha deve conter pelo menos uma letra minuscula e maiuscula',
                  'senha.numbers' => 'O campo senha deve conter pelo menos um número',
                  'senha.symbols' => 'O campo senha deve conter pelo menos um simbolo (exemplo: @ &)'
              ]
      );

      if ($validator->fails()) {
          return redirect()
              ->route('usuario.cadastrar')
              ->withErrors($validator)
              ->withInput();
      }
        $usuario = new \App\Models\Usuario();
        $usuario::create($dados->all());

        $usuarios = new \App\Models\Usuario();
        return view('principal');
    }
    
    
    function loginUsuario(){
        return view('usuario.login');
    }

        public function autenticar(Request $request)
    {
        $usuario = Usuario::where('email', $request->email)->first();

        if (!$usuario) {
            return back()->with('erro', 'E-mail ou senha inválidos.');
        }

        if (!Hash::check($request->senha, $usuario->senha)) {
            return back()->with('erro', 'E-mail ou senha inválidos.');
        }

        session([
            'usuario_id' => $usuario->usuario_id,
            'usuario_nome' => $usuario->nome,
            'admin' => $usuario->admin,
        ]);

        return redirect()->route('principal');
    }
    
    // public function logout(){        
    //     return view('usuario.login');
    // }

        public function logout()
    {
        session()->flush();

        return redirect()->route('principal');
    }
    
    // ADMIN

    function updateUsuario(string $usuario_id){
        $usuario = Usuario::findOrFail($usuario_id);

        return view('dashboard.usuario.update', ['usuario'=>$usuario]);
    }

    function saveUsuario(Request $dados) {
        $usuario = \App\Models\Usuario::findOrFail($dados->usuario_id);
        $usuario->update($dados->all());
        
        return view('dashboard.usuario.update', ['usuario' => $usuario])->with('success', 'Atualizado!');
    }

    function readUsuario(){
        $usuario = new \App\Models\Usuario();

        return view('dashboard.usuario.read', ['usuarios'=>$usuario::all()]);
    }

    function deleteUsuario(string $usuario_id)
    {
        Usuario::destroy($usuario_id);

        return redirect()
            ->route('dashboard.usuario.read')
            ->with('success', 'Usuário removido com sucesso!');
    }
}


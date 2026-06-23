<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class Usuario extends Controller
{
    function indexUsuario(){
        return view('usuario.cadastrar');
    }

    function createUsuario(Request $dados){
        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255',
                  'email' => 'required|email|min:3',
                  'senha' => 'required|senha::min(8)->letters()->mixedCase()->numbers()->symbols()'
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
                  'senha.numbers' => 'O campo senha deve conter pelo menos um simbolo (exemplo: @ &)'
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
        return view('usuario.create');
    }

    function readUsuario(){
        $usuario = new \App\Models\Usuario();

        return view('usuario.read', ['usuarios'=>$usuario::all()]);
    }

    function updateUsuario(string $id){
        $usuario = Usuario::findOrFail($id);

        return view('usuario.update', ['usuario'=>$usuario]);
    }

    function deleteUsuario(string $id) {
            $usuario = Usuario::findOrFail($id);
            $usuario::destroy($id);
    
            return view('usuario.index', ['success'=>'Removido!', 'usuarios'=>$usuario::all()]);
    
        }
    
        function saveUsuario(Request $dados) {
                    $validator = Validator::make(
                $dados->all(),
                  [
                      'nome' => 'required|min:3|max:255',
                      'email' => 'required|email|min:3',
                      'senha' => 'required|senha::min(8)->letters()->mixedCase()->numbers()->symbols()'
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
                      'senha.numbers' => 'O campo senha deve conter pelo menos um simbolo (exemplo: @ &)'
                  ]
          );
    
          if ($validator->fails()) {
              return redirect()
                  ->route('usuario.update')
                  ->withErrors($validator)
                  ->withInput();
          }
          $usuario = new \App\Models\Usuario();
            $usuario::create($dados->all());
    
            $usuarios = new \App\Models\Usuario();
    
            return view('usuario.update', ['success'=>'Atualizado!', 'usuarios'=>$usuario::all()]);
        }
}



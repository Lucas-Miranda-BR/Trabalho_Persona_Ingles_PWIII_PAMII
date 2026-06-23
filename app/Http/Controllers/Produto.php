<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Produto extends Controller
{

    // PUBLICO

    function readProdutoId(string $id){
        $produto = Produto::findOrFail($id);
        return view('produto.compra-id', compact('produto'));
        }

    
        // ADMIN 
    
    function indexProduto(){
        return view('dashboard.produto.index');
    }

    function createProduto(Request $dados){
        $request->merge([
            'valor' => str_replace(',', '.', $request->valor),
        ]); 
        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255',
                  'valor' => 'required|numeric|min:0',
                  'estoque' => 'required|integer'
                  
              ],
              [
                  'nome.required' => 'O campo nome é obrigatório.',
                  'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                  'valor.required' => 'O campo valor é obrigatório.',
                  'valor.numeric' => 'O campo valor deve ser um decimal.',
                  'estoque.required' => 'O campo estoque é obrigatório.',
                  'estoque.integer' => 'O campo estoque deve ser um número.',
              ]
      );

      if ($validator->fails()) {
          return redirect()
              ->route('dashboard.produto.index')
              ->withErrors($validator)
              ->withInput();
      }
      $produto = new \App\Models\Produto();
        $produto::create($dados->all());

        $produtos = new \App\Models\Produto();
        return view('dashboard.produto.create');
    }

    public function getStatus(){
    return match (true) {
        $this->estoque == 0 => 'Não disponível',
        $this->estoque <= 5 => 'Pouco estoque',
        default => 'Disponível',
    };
}

function readProduto(){
    $produto = new \App\Models\Produto();

    return view('produto.read', ['produtos'=>$produto::all()]);
}

    function updateProduto(string $id){
        $produto = Produto::findOrFail($id);

        return view('dashboard.produto.update', ['Produto'=>$produto]);
    }

    function deleteProduto(string $id) {
            $produto = Produto::findOrFail($id);
            $produto::destroy($id);
    
            return view('dashboard.produto.index', ['success'=>'Removido!', 'Produtos'=>$produto::all()]);
    
        }
    
        function saveProduto(Request $dados) {
            $request->merge([
                'valor' => str_replace(',', '.', $request->valor),
            ]); 
            $validator = Validator::make(
                $dados->all(),
                  [
                      'nome' => 'required|min:3|max:255',
                      'valor' => 'required|numeric|min:0',
                      'estoque' => 'required|integer'
                      
                  ],
                  [
                      'nome.required' => 'O campo nome é obrigatório.',
                      'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                      'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                      'valor.required' => 'O campo valor é obrigatório.',
                      'valor.numeric' => 'O campo valor deve ser um decimal.',
                      'estoque.required' => 'O campo estoque é obrigatório.',
                      'estoque.integer' => 'O campo estoque deve ser um número.',
                  ]
          );
    
          if ($validator->fails()) {
              return redirect()
                  ->route('dashboard.produto.update')
                  ->withErrors($validator)
                  ->withInput();
          }
          $produto = new \App\Models\Produto();
            $produto::create($dados->all());
    
            $produtos = new \App\Models\Produto();
    
            return view('dashboard.produto.update', ['success'=>'Atualizado!', 'rodutos'=>$produto::all()]);
        }
}



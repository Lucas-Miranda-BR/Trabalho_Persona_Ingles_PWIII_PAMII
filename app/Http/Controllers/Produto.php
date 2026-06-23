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
        $dados->merge([
            'valor' => str_replace(',', '.', $dados->valor),
        ]); 
        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255',
                  'descricao' => 'required|max:255',
                  'valor' => 'required|numeric|min:0',
                  'estoque' => 'required|integer'
                  
              ],
              [
                  'nome.required' => 'O campo nome é obrigatório.',
                  'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                  'descricao.required' => 'O campo descrição é obrigatório.',
                  'descricao.max' => 'o campo descrição deve conter no máximo 255 caracteres.',
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
        return view('dashboard.produto.index', ['success'=>'Cadastrado de produto realizado!']);
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

    return view('dashboard.produto.read', ['produtos'=>$produto::all()]);
}

    function updateProduto(string $produto_id){
        $produto = Produto::findOrFail($produto_id);

        return view('dashboard.produto.update', ['Produto'=>$produto]);
    }

    function deleteProduto(string $produto_id) {
            $produto = Produto::findOrFail($produto_id);
            $produto::destroy($produto_id);
    
            return view('dashboard.produto.index', ['success'=>'Removido!', 'produtos'=>$produto::all()]);
    
        }
    
        function saveProduto(Request $dados) {
            $dados->merge([
                'valor' => str_replace(',', '.', $dados->valor),
            ]); 
            $validator = Validator::make(
                $dados->all(),
                  [
                      'nome' => 'required|min:3|max:255',
                      'descricao' => 'required|max:255',
                      'valor' => 'required|numeric|min:0',
                      'estoque' => 'required|integer'
                      
                  ],
                  [
                      'nome.required' => 'O campo nome é obrigatório.',
                      'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                      'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
                      'descricao.required' => 'O campo descrição é obrigatório.',
                      'descricao.max' => 'o campo descrição deve conter no máximo 255 caracteres.',
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
            $produto::update($dados->all());
    
            $produtos = new \App\Models\Produto();
    
            return view('dashboard.produto.update', ['success'=>'Atualizado!', 'produtos'=>$produto::all()]);
        }
}



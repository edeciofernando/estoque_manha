<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ExemploController extends Controller
{
    public function cidades() {
        $autor = "Jonas dos Santos";
        $cidade[] = "Pelotas";
        $cidade[] = "Rio Grande";
        $cidade[] = "Porto Alegre";
        
        return view('cidades', compact('cidade'))->with('autor', $autor);
    }

    public function form() {
        return view('form');
    }
    
    public function grava(Request $request) {
//        $nome = $request->nome;
//        $email = $request->email;
        $dados = $request->all();
        
        echo "<h2> Nome: " . $dados['nome'] . "</h2>";
        echo "<h2> E-mail: " . $dados['email'] . "</h2>";
        
    }

    public function lista() {
        // obtém todos os dados da tabela produto (representada pela model Produto)
        $prods = Produto::all();
        // carrega a view lista passando os dados como parâmetro
        return view('lista', compact('prods'));
    }
    
    // outra forma
    public function lista1() {
        // instancia um objeto da classe produto
        $produto = new Produto();
        // obtém os dados
        $prods = $produto->all();

        // carrega a view lista passando os dados como parâmetro
        return view('lista', compact('prods'));
    }
    
    // outra forma
    // a instanciação do objeto produto ocorre na declaração da function
    public function lista2(Produto $produto) {
        // obtém os dados
        $prods = $produto->all();

        // carrega a view lista passando os dados como parâmetro
        return view('lista', compact('prods'));
    }

    
}

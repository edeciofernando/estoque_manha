<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $produto = new Produto();
        // obtém os dados
        $prods = $produto->all();
        // carrega a view lista passando os dados como parâmetro
        return view('lista', compact('prods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('produtos_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request) {
        // instancia um objeto da classe produtos
        $prod = new Produto();

        // seta seus atributos
        $prod->nome = $request->nome;
        $prod->marca = $request->marca;
        $prod->quant = $request->quant;
        $prod->preco = $request->preco;

        // grava/salva os dados
        $prod->save();

        return redirect()->route('produtos.index')
                        ->with('status', $request->nome . ' Cadastrado com Sucesso!');
    }

    public function store(Request $request) {
        // obtém todos os campos do formulário como elementos de vetor
        $dados = $request->all();

        // insere o registro na tabela produtos
        $prod = Produto::create($dados);

        if ($prod) {
            return redirect()->route('produtos.index')
                            ->with('status', $request->nome . ' Cadastrado com Sucesso!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return "<h1> Para Mostrar Produto: $id </h1>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}

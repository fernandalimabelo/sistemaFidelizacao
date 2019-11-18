<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\produto;
// use App\Models\Empresa;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('empresa.db_empresa', compact('produtos'));
    }

    // public function create(){
    //     return view('include-produtos');
    // }

    public function store(Request $request){
        $produtos = new Produto;
        $produtos->nome_produto = $request->nome_produto;
        $produtos->pontos_produto = $request->pontos_produto;
        $produtos->preco_produto = $request->preco_produto;
        $produtos->id_estabelecimento_fk = Produto::find(1)->empresa;
        $produtos->save();
        return redirect()->route('product.index')->with('message', 'Produto criado com sucesso!');
    }

    public function show($id_produto){
        //
    }

    // public function edit($id_produto){
    //     $produtos = Produto::findOrFail($id_produto);
    //     return view('alter-produtos', compact('produtos'));
    // }

    // public function update(Request $request, $id_produto){
    //     $produtos = Produto::findOrFail($id_produto);
    //     $produtos->nome_produto = $request->nome_produto;
    //     $produtos->pontos_produto = $request->pontos_produto;
    //     $produtos->preco_produto = $request->preco_produto;
    //     $produtos->id_estabelecimento_fk = $request->id_estabelecimento_fk;
    //     $produtos->save();
    //     return redirect()->route('product.index')->with('message', 'Produto alterado com sucesso!');
    // }

    // public function destroy($id_produto){
    //     $produtos = Produto::findOrFail($id_produto);
    //     $produtos->delete();
    //     return redirect()->route('product.index')->with('message', 'Produto excluído com sucesso!');
    // }
}

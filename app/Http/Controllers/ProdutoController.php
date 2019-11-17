<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('empresa.homeEmpresa', compact('produtos'));
    }

    // public function create(){
    //     return view('include-produtos');
    // }

    public function store(Request $request){
        if(Auth::guard("empresa")->check()){
            $produtos = new Produto;
            $produtos->nome_produto = $request->nome_produto;
            $produtos->pontos_produto = $request->pontos_produto;
            $produtos->preco_produto = $request->preco_produto;
            $empresa_produtos = Auth::guard("empresa")->id(); //fk
            $produtos->empresa_id = $empresa_produtos;      //fk
            $produtos->save();
            return redirect()->route('db_empresa')->with('message', 'Produto criado com sucesso!');
        } else {
            return "aqui";
        }
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

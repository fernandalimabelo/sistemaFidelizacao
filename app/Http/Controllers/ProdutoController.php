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
            return redirect()->route('db_empresa');
            // return redirect()->route('db_empresa')->with('success', 'Produto cadastrado com sucesso!');
        } else {
            return "aqui";
        }
    }

    public function show($id_produto){
        //
    }
}

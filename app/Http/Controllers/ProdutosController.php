<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\HtmlString;
use \Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
    public function produtos(){
        $produtos = Produto::all();
        return view('produtos.produtos', ['dados'=>$produtos]);
        
    }
    
    public function cadastrar(){

    return view('produtos.cadastrar');
}


public function save(Request $request){

    $produto = Produto::create($request->all());
    if(!empty($produto)){
        return redirect()->route('produtos.produtos')->with('mensagem', new HtmlString('<button type="button" class="btn btn-success  swalDefaultSuccess">Produto cadastrado com sucesso!</button>'));
    }

}


public function editar($id){

    $produto = produto::where('id',$id)->first();

    if(!empty($produto)){

        return view('produtos.editar', ['dados'=>$produto]);
    }else{
        return redirect()->route('produtos.produtos');
    }

}

public function update(request $request, $id){

    $atualizar = [

        'produto'=> $request->produto,
        'preco'=> $request->preco,
        'marca'=> $request->marca,
        'tipo'=> $request->tipo,
        'quantidade'=> $request->quantidade,
        'codigo_barras'=> $request->codigo_barras,
    ]; 

    produto::where('id',$id)->update($atualizar);
    return redirect()->route('produtos.produtos')->with('editar', new HtmlString('<button type="button" class="btn btn-success ">Produto alterado com sucesso!</button>'));
}

public function excluir($id)
{
    $produto = Produto::findOrFail($id);
    $produto->delete();

    // Redirecionar para uma página de sucesso ou qualquer outra ação necessária
    
    return redirect()->route('produtos.produtos')->with('excluir', new HtmlString('<button type="button" class="btn btn-success ">Produto excluido com sucesso!</button>'));
    }
   
    
    public function buscarProdutos(Request $request)
    {
        $termo = $request->input('produto');
        $produtos = DB::table('produtos')->where('produto', 'LIKE', "%$termo%")->get();
        dd($termo);
        return response()->json($produtos);
    }
    









}



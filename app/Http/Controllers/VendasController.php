<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Venda;
use App\Models\Produto;
use \Illuminate\Support\Facades\DB;
use App\Models\Marca;
use Illuminate\Support\HtmlString;


class VendasController extends Controller
{
    public function vendas(){
        $vendas = Venda::all();
        $subtotal = Venda::sum('total');
        $user = user::all();
        return view('vendas.vendas',['usuarios'=>$user],['infovendas'=>$vendas])->with('subtotal',$subtotal);
    }

    public function create_vendas(){
        $user = user::all();
        $produtos = Produto::all();

        $marcas = DB::table('produtos')->select('marca')->distinct()->get();
        return view('vendas.create-vendas',['usuarios'=>$user],['dados'=>$produtos])->with('marcas',$marcas);

    }

    public function insert_vendas(request $request){
        $vendas = Venda::create($request->all());
        if(!empty($vendas)){
            return redirect()->route('vendas.vendas')->with('mensagem', new HtmlString('<button type="button" class="btn btn-success  swalDefaultSuccess">Venda cadastrada com sucesso!</button>'));
        }

    }


    public function buscarMarcasPorProduto()
    {
        $produto = request()->get('produto');
        
        // Consulta as marcas correspondentes ao produto selecionado
        $marcas = DB::table('produtos')
            ->where('id', '=', $produto)
            ->pluck('marca')
            ->unique();
        
        // Retorna as marcas como uma lista de opções HTML
        $html = '';
        foreach ($marcas as $marca) {
            $html .= '<option value="' . $marca . '">' . $marca . '</option>';
        }
        return $html;
    }


    public function buscarPrecoPorMarca(){
    
        // Recupera a marca e o produto selecionado
        $produto = request()->get('produto');
        
        // Consulta o preço correspondente à marca selecionada
        $preco = DB::table('produtos')
            ->where('id', '=', $produto)
            ->pluck('preco')
            ->unique();
        // Retorna as marcas como uma lista de opções HTML
        $html = '';
        foreach ($preco as $preco) {
            $html .= '<option value="' . $preco . '">' . $preco . '</option>';
        }
        return $html;
        
    }

    
}

    

    








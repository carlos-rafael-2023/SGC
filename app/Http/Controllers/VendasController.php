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
        $valor_formatado = number_format($subtotal, 2, ',', '.');
        $user = user::all();
        return view('vendas.vendas',['usuarios'=>$user],['infovendas'=>$vendas])->with('valor_formatado',$valor_formatado);
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


    public function excluir($venda_id)
    {
        $Venda = Venda::findOrFail($venda_id);
        $Venda->delete();
    
        // Redirecionar para uma página de sucesso ou qualquer outra ação necessária
        
        return redirect()->route('vendas.vendas')->with('excluir', new HtmlString('<button type="button" class="btn btn-success ">Venda excluido com sucesso!</button>'));
        }


    public function buscarMarcasPorProduto()
    {
        $codigo_de_barras = request()->get('codigo_barras');
        
        // Consulta as marcas correspondentes ao produto selecionado
        $marcas = DB::table('produtos')
            ->where('codigo_barras', '=', $codigo_de_barras)
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
        $codigos_barras = request()->get('codigo_barras');
        
        // Consulta o preço correspondente à marca selecionada
        $preco = DB::table('produtos')
            ->where('codigo_barras', '=', $codigos_barras)
            ->pluck('preco')
            ->unique();

        // Retorna as marcas como uma lista de opções HTML
        $html = '';
        foreach ($preco as $preco) {
            $html .= '<option value="' . $preco . '">' . $preco . '</option>';
        }
        return $html;
        
    }

    public function buscarprodutoPorbarras(){
    
        // Recupera a marca e o produto selecionado
        $codigo_barras = request()->get('codigo_barras');
        
        // Consulta o preço correspondente à marca selecionada
        $produto = DB::table('produtos')
            ->where('codigo_barras', '=', $codigo_barras)
            ->pluck('produto')
            ->unique();
        // Retorna as marcas como uma lista de opções HTML
        $html = '';
        foreach ($produto as $produto) {
            $html .= '<option value="' . $produto . '">' . $produto . '</option>';
        }
        return $html;
        
    }
}

    

    








<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Venda;
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
        return view('vendas.create-vendas',['usuarios'=>$user]);

    }

    public function insert_vendas(request $request){
        $vendas = Venda::create($request->all());
        if(!empty($vendas)){
            return redirect()->route('vendas.vendas')->with('mensagem', new HtmlString('<button type="button" class="btn btn-success  swalDefaultSuccess">Venda cadastrada com sucesso!</button>'));
        }

    }








}

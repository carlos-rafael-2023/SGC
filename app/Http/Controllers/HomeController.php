<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Venda;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = user::all();
        $subtotal = Venda::sum('total');
        $valor_formatado = number_format($subtotal, 2, ',', '.');
      
        return view('home',['usuarios'=>$user])->with('valor_formatado',$valor_formatado);
    }
}

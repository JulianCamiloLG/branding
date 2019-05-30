<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $carrito = $request->session()->get('cart');
        $valorCompra=$this->calcularCompra($carrito);
        return view('shopingcart', compact('carrito','valorCompra'));
    }

    private function calcularCompra($carrito)
    {
        $total=0;
        if($carrito){
            foreach ($carrito as $key => $value) {
                foreach ($carrito[$key] as $item => $valor) {
                    if($item=='precio'){
                        $total+=$valor;
                    }
                }
                
            }
        }
        return $total;
    }
}

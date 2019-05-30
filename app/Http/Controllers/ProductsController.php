<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $catalogo = Product::all();
        return view('products', compact('catalogo'));
    }
    
    public function addToCart(Request $request)
    {
        $id=$request->input('buy');
        $product=Product::find($id);
        if(!$product) {
            abort(404);
        }

        $cart = session()->get('cart');
 
        // carrito vacio= nuevo carrito
        if(!$cart) {
            $this->carritoVacio($cart,$product,$id);
        }
 
        // carrito no vacio= mirar si ya existe el producto se aumenta la cantidad
        else if(isset($cart[$id])) {
            $this->productoExistenteCarritoNoVacio($cart,$product,$id);
        }
        else{
            // carrito no vacio y producto no existe
            $this->productoNuevo($cart,$product,$id);
        }
        return redirect('product')->with('status', 'Producto agregado :D');
        
    }

    private function carritoVacio($cart,$product,$id)
    {
        $cart = [
                    $id => [
                        "nombre" => $product->nombre,
                        "cantidad" => 1,
                        "precio" => $product->precio,
                        "tipo" => $product->tipo,
                        "foto" => $product->foto,
                        "id"=>$id
                    ]
            ];
 
            session()->put('cart', $cart);
    }

    private function productoExistenteCarritoNoVacio($cart,$product,$id)
    {
        $cart[$id]['cantidad']++;
        $cart[$id]['precio']+=$cart[$id]['precio'];
        session()->put('cart', $cart);
    }

    private function productoNuevo($cart,$product,$id)
    {
        $cart[$id] = [
            "nombre" => $product->nombre,
            "cantidad" => 1,
            "precio" => $product->precio,
            "tipo" => $product->tipo,
            "foto" => $product->foto,
            "id"=>$id
        ];
 
        session()->put('cart', $cart);
    }
}

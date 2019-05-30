@extends('plantilla')

@section('titulo')
    Mi carrito
@endsection

@section('contenido')
    <!-- Vista de los productos -->
    <div class="w3-container w3-center w3-padding-64 w3-margin-left w3-margin-right w3-margin-bottom">
    <h1>Mis compras </h1>
    <div class="w3-bottombar w3-border-teal w3-margin-bottom"></div>
    @isset ($carrito)
        @forelse($carrito as $itemCarrito)
            <div class="w3-center card w3-card-4 w3-margin-bottom w3-hover-pale-green w3-margin-right" style="width:100%">
                <div class="w3-rest">
                    <div class="w3-half w3-rightbar w3-border-teal w3-margin-right">
                        <img src="{{ URL::asset('img/'. $itemCarrito['foto']) }}"  alt="{{ $itemCarrito['tipo'] }}" style="width:70%" class="w3-image">
                    </div>
                    <div class="w3-rest w3-center w3-padding-64">
                        <h2><b>{{ $itemCarrito['nombre'] }}</b></h2> 
                        <h3>Valor:  ${{ $itemCarrito['precio'] }}</h3>
                        <h3> Cantidad: {{ $itemCarrito['cantidad'] }} unidades</h3>
                        <div class="w3-bottombar w3-border-teal w3-margin-bottom"></div>
                        <form action="addtocart" method="post">
                            @csrf
                            <button type="submit" name="buy" class="w3-button w3-ripple w3-teal w3-block" id="buy" value="{{ $itemCarrito['id'] }}"><i class="fa fa-fw fa-window-close"></i>Retirar</button>
                        </form>
                    </div>
                </div>
            </div>
           @empty
              <h1>Lo sentimos, aun no tienes nada registrado en tu carrito</h1>
           @endforelse
       @else
            <h1>Lo sentimos, aun no tienes nada registrado en tu carrito</h1>
    @endisset
    <h1>Valor de la compra: ${{$valorCompra}}</h1>
    <button name="pay" class="w3-button w3-ripple w3-teal w3-block" id="pay" value=""><i class="fa fa-fw fa-id-card "></i>Pagar</button>
    </div>
@endsection
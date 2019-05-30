@extends('plantilla')

@section('scriptOpcional')
    <script src="{{ URL::asset('js/products.js') }}"></script>
@endsection

@section('titulo')
    Productos
@endsection

@section('contenido')
<!-- Barra vertical -->
<nav class="w3-bar-block w3-white w3-collapse w3-quarter" style="z-index:3;width:32%" id="mySidebar">
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
        <button class="w3-button w3-block w3-white w3-left-align" onclick="filterSelection('all')"><i class="fa fa-caret-right"></i> Todo</button>
        <button class="w3-bar-item w3-button" onclick="filterSelection('camisa')">Camisas</button>
        <button class="w3-bar-item w3-button" onclick="filterSelection('vestido')">Vestidos</button>
        <button class="w3-bar-item w3-button" onclick="filterSelection('jean')">Jeans </a>
        <button class="w3-bar-item w3-button" onclick="filterSelection('chaqueta')">Chaquetas</button>
        <button class="w3-bar-item w3-button" onclick="filterSelection('bolso')">Bolsos</button>
        <button class="w3-bar-item w3-button" onclick="filterSelection('zapato')">Zapatos</button>
    </div>
</nav>
    <!-- Vista de los productos -->
    <div class="w3-container w3-rest w3-padding-64 w3-margin-left w3-margin-right w3-margin-bottom">
    @isset ($catalogo)
           @forelse($catalogo as $itemCatalogo)
           <div class="column filterDiv {{ $itemCatalogo['tipo'] }}">
                <div class="card w3-quarter w3-card-4 w3-margin-right w3-margin-bottom w3-hover-pale-green" style="width:100%">
                    <img src="{{ URL::asset('img/'. $itemCatalogo['foto']) }}"  alt="{{ $itemCatalogo['tipo'] }}" style="width:70%" class="w3-image">
                    <div class="container text">
                        <h4><b>{{ $itemCatalogo['nombre'] }}</b></h4> 
                        <h5> ${{ $itemCatalogo['precio'] }}</h5>
                        <div class="w3-bottombar w3-border-teal w3-margin-bottom"></div>
                        <form action="addtocart" method="post">
                            @csrf
                            <button type="submit" name="buy" class="w3-button w3-ripple w3-teal w3-block" id="buy" value="{{ $itemCatalogo['id'] }}"><i class="fa fa-fw fa-cart-arrow-down"></i>Agregar al carro</button>
                        </form>
                        
                    </div>
                </div>
            </div>
           @empty
               No hay productos para mostrar
           @endforelse
       @else
            Catálogo no definido
       @endisset
       @if (session('status'))
        <script>
            alert('{{ session('status') }}');
        </script>
        @endif
    </div>
@endsection
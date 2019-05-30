@extends('plantilla')

@section('titulo')
    Branding GOAL
@endsection

@section('contenido')
<!-- HEADER -->
<div class="w3-display-container w3-container w3-margin-top w3-margin-bottom w3-padding ">
    <img src="{{ URL::asset('img/jeans.jpg') }}" alt="Empresa" style="width:100% ; height:100%" class="w3-image">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 60px" >
      <h1 class="w3-jumbo w3-wide w3-hide-small">Goal </h1>
      <h1 class="w3-hide-large w3-hide-medium">Goal</h1>
      <h1 class="w3-hide-small">Make your goals come true</h1>
      <p><a href="/products" class="w3-button w3-black w3-padding-large w3-large">ANTOJATE</a></p>
    </div>
  </div>

<!-- BRANDING-->

  <div class="w3-display-container w3-container w3-margin-bottom w3-padding">
      <img src="{{ URL::asset('img/banner-bg.jpg') }}" alt="pasion" style="width:100%">
      <div class="w3-display-topleft w3-text-white" style="padding:24px 48px" >
        <h1 class="w3-jumbo w3-hide-small">Libera tus sentidos</h1>
        <h1 class="w3-hide-large w3-hide-medium">Libera tus sentidos</h1>
        <h1 class="w3-hide-small">Viste siempre a la ultima moda</h1>
      </div>
  </div>

  <div class="w3-display-container w3-container w3-margin-bottom w3-padding w3-half w3-right">
      <img src="{{ URL::asset('img/male.jpeg') }}" alt="malemodel" style="width:100%; height:350px" class="w3-image">
      <div class="w3-display-topleft w3-text-teal" style="padding:200px 48px" >
        <h1 class="w3-xxlarge w3-hide-small">Ropa Casual</h1>
        <h1 class="w3-hide-large w3-hide-medium">Ropa casual</h1>
        <h1 class="w3-hide-small">Estilo moderno</h1>
      </div>
  </div>
  <div class="w3-display-container w3-container w3-margin-bottom w3-padding w3-half w3-right">
      <img src="{{ URL::asset('img/female.jpg') }}" alt="femalemodel" style="width:100%; height:350px" class="w3-image">
      <div class="w3-display-topleft w3-text-black" style="padding:200px 48px" >
        <h1 class="w3-xxlarge w3-hide-small">Ropa comoda</h1>
        <h1 class="w3-hide-large w3-hide-medium">Ropa comoda</h1>
        <h1 class="w3-hide-small">Calidad Garantizada</h1>
      </div>
  </div>

  <!-- MEJORES PRODUCTOS-->
  <div class="w3-display-container w3-container w3-margin-bottom w3-padding w3-center row">
    <h2 class="w3-xxlarge w3-text-black">Los favoritos de todos</h2>
    <div class="w3-bottombar w3-border-teal"></div>
    <div class="column">
    <div class="card w3-quarter w3-card-4 w3-margin-right" style="width:100%">
      <img src="{{ URL::asset('img/jeans1.jpg') }}" alt="jeans1" style="width:60%" class="w3-image">
      <div class="container">
        <h4><b>Ripped Skinny Jeans</b></h4> 
        <p>$29,99</p> 
      </div>
    </div>
    </div>
    
    <div class="column">
    <div class="card w3-quarter w3-card-4 w3-margin-right" style="width:100%">
      <img src="{{ URL::asset('img/jeans2.jpg') }}" alt="jeans2" style="width:60%" class="w3-image">
      <div class="container">
        <h4><b>Mega Ripped Jeans</b></h4> 
        <p>$39,99</p> 
      </div>
    </div>
    </div>
    <div class="column">
    <div class="card w3-quarter w3-card-4 w3-margin-right" style="width:100%">
      <img src="{{ URL::asset('img/item-05.jpg') }}" alt="purse" style="width:69%" class="w3-image">
      <div class="container">
        <h4><b>Pink Small Purse</b></h4> 
        <p>$79,99</p> 
      </div>
    </div>
    </div>

    <div class="column">
    <div class="card w3-quarter w3-card-4 " style="width:100%">
      <img src="{{ URL::asset('img/item-03.jpg') }}" alt="buso" style="width:69%" class="w3-image">
      <div class="container">
        <h4><b>Blue Jacket</b></h4> 
        <p>$69,99</p> 
      </div>
    </div>
    </div>
    <h3 class="w3-xxlarge w3-text-black">Inicia sesion para comprar</h3>
    <button class="w3-btn w3-ripple w3-teal"  onclick="window.location='/login';">Iniciar Sesion</button>
  </div>
  <!-- Suscribirse -->
  <div class="w3-container w3-light-green w3-padding-32">
    <h1>Suscribete</h1>
    <p>Para estar al día en nuestras ofertas:</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Digita email" style="width:100%"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Suscribirse</button>
  </div>
 @endsection
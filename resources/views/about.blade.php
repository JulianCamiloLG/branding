@extends('plantilla')

@section('scriptOpcional')
    <script src="{{ URL::asset('js/products.js') }}"></script>
@endsection

@section('titulo')
    Sobre Nosotros
@endsection

@section('contenido')
<!-- Nuestra empresa -->
<div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Nosotros</h3>
    <div class="w3-bottombar w3-border-teal w3-margin-bottom"></div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, 
        sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>
<!-- Nuestro equipo -->
  <div class="w3-container w3-row-padding-32 w3-grayscale">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Nuestro equipo</h3>
    <div class="w3-bottombar w3-border-teal w3-margin-bottom"></div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="{{ URL::asset('img/team1.jpg') }}" alt="Johan" style="width:100%">
      <h3>Johan Doe</h3>
      <p class="w3-opacity">CEO & Fundadora</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-teal w3-block">Contacta</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="{{ URL::asset('img/team2.jpg') }}" alt="Jhosep" style="width:100%">
      <h3>Jhosep Doe</h3>
      <p class="w3-opacity">Diseñador & Fundador</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-teal w3-block">Contacta</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="{{ URL::asset('img/team3.jpg') }}" alt="Claudia" style="width:100%; height:219px">
      <h3>Clauda Ross</h3>
      <p class="w3-opacity">Diseñadora</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-teal w3-block">Contacta</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="{{ URL::asset('img/team4.jpg') }}" alt="Dan" style="width:100%">
      <h3>Dan Star</h3>
      <p class="w3-opacity">Marketing</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-teal w3-block">Contacta</button></p>
    </div>
  </div>
  <!-- testimonios -->
 <div class="w3-container w3-padding-32">
  <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Testimonios</h3>
    <div class="w3-bottombar w3-border-teal w3-margin-bottom"></div>

  <div class="contenedor">
    <img src="{{ URL::asset('img/bandmember.jpg') }}" alt="Avatar" style="width:90px">
    <p><span>Chris Fox.</span> Amo de casa.</p>
    <p>La mejor ropa que me he comprado nunca.</p>
  </div>

  <div class="contenedor">
    <img src="{{ URL::asset('img/team3.jpg') }}" alt="Avatar" style="width:90px">
    <p><span>Rebecca Flex.</span> Bloggera de ropa</p>
    <p>Cada prenda que me he comprado me encanta más que la anterior</p>
 </div>
 <div class="contenedor">
    <img src="{{ URL::asset('img/anonimus.png') }}" alt="Avatar" style="width:90px">
    <p><span>Ususario anonimo.</span> Cocinera</p>
    <p>Pesimo servicio de devolución</p>
 </div>
</div>
@endsection
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    @yield('scriptOpcional')

    <script>
      function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else { 
          x.className = x.className.replace(" w3-show", "");
        }
      }
    </script>

    <title>@yield('titulo', 'Branding')</title>
</head>
<body >

<!-- Barra de navegación -->
<div class="w3-top">
  <div class="w3-bar w3-light-green w3-wide w3-padding w3-card">
    <a href="/" class="w3-bar-item w3-button w3-hover-green"><b>GOAL</b></a>
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <!-- Links a la derecha. Esconderlos en pantalla pequeña -->
    <div class="w3-right w3-hide-small">
      <a href="/product" class="w3-bar-item w3-button w3-hover-green w3-hide-small">Productos</a>
      <a href="/about" class="w3-bar-item w3-button w3-hover-green w3-hide-small">Nosotros</a>
      <a href="/contact" class="w3-bar-item w3-button w3-hover-green w3-hide-small">Contacto</a>
      @guest
        @if (Route::has('login'))
        <a href="/login" class="w3-bar-item w3-button w3-hover-green w3-hide-small">Iniciar Sesión</a>
        @endif
      @else
        <a href="/carrito" class="w3-bar-item w3-button w3-hover-green w3-hide-small"> {{ Auth::user()->name }} <i class="fa fa-fw fa-cart-arrow-down"></i>Carrito </a>
      @endguest
    </div>
  </div>
</div>

<!-- Navbar Pequeña -->
<div id="navDemo" class="w3-bar-block w3-light-green w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="/product" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Productos</a>
  <a href="/about" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Nosotros</a>
  <a href="/contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contacto</a>
</div>


@yield('contenido')

  <!-- FOOTER -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
    <div class="w3-col s4">
        <h4>Tienda</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Goal fashion</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> ex@mail.com</p>
        <br>
        
      </div>

      <div class="w3-col s4">
        <h4>Aceptamos</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> Visa </p>
        <p><i class="fa fa-fw fa-credit-card"></i> MasterCard</p>
        <p><i class="fa fa-fw fa-money"></i>Efectivo</p>
        <p><i class="fa fa-fw fa-bitcoin"></i>Bitcoins</p>
        <br>
        
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>Nuestras redes</h4>
        <p><i class="fa fa-facebook-official w3-hover-opacity w3-large"></i> Facebook</p>
        <p><i class="fa fa-instagram w3-hover-opacity w3-large"></i> Instagram</p>
        <p><i class="fa fa-snapchat w3-hover-opacity w3-large"></i> Snapchat</p>
        <p><i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i> Pinterest</p>
        <p><i class="fa fa-twitter w3-hover-opacity w3-large"></i> Twitter</p>
        <p><i class="fa fa-linkedin w3-hover-opacity w3-large"></i> Linkedin</p>
      </div>
    </div>
  </footer>
  <div class="w3-light-green w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div>
    
</body>
</html>
@extends('plantilla')

@section('titulo')
    Contacto
@endsection

@section('contenido')
<!-- Seccion de contacto --> 
<div class="w3-rest w3-margin-top w3-padding-32 w3-center">
    <h1>Contáctanos</h1>
    <div class="w3-bottombar w3-border-teal"></div>
</div>
<!-- Contacto -->
<div class="w3-container w3-light-green w3-margin-left w3-margin-right w3-margin-bottom">
    <div class="w3-display-container w3-container w3-margin-bottom w3-padding w3-half w3-left w3-padding-64">
        <h4>Escríbenos</h4>
        <div class="w3-bottombar w3-border-teal w3-margin-bottom"></div>
        <form action="{{ route('mail') }}" method="post">
        {{ method_field('POST') }}
        @csrf
        <div class="w3-display-container w3-container w3-half w3-margin-bottom">
            <input name="name" type="text" class="w3-input" id="name" placeholder="Nombre" required="">
        </div>
        <div class="w3-display-container w3-container w3-half w3-margin-bottom">
            <input name="email" type="text" class="w3-input" id="email" placeholder="Email" required="">
        </div>
        <div class="w3-display-container w3-container w3-rest w3-margin-bottom">
            <input name="subject" type="text" class="w3-input" id="subject" placeholder="Asunto" required="">
        </div>
        <div class="w3-display-container w3-container w3-rest">
            <textarea name="content" rows="6" class="w3-input" id="message" placeholder="Mensaje" required=""></textarea>
        </div>
        <div class="w3-display-container w3-container w3-rest w3-center w3-margin-top">
            <button name="Send" class="w3-button w3-ripple w3-teal w3-block" id="enviar" type="submit" >Enviar mensaje</button>
        </div>
        </form>
    </div>
    <!-- Mapa -->
    <div class="w3-display-container w3-container w3-margin-bottom w3-padding-64 w3-half w3-right">
        <h4>Encuentra nuestras tiendas</h4>
        <div class="w3-bottombar w3-border-teal w3-margin-bottom"></div>
        <div class="embed-container">
            <iframe src="https://www.google.com/maps/d/embed?mid=1Qfow2sZCRaFxnIx60Nvc1Y1zU-6zMAVK" allowfullscreen></iframe>
        </div>
        
    </div>
    @if (session('status'))
        <script>
            alert('{{ session('status') }}');
        </script>
    @endif
</div>
@endsection
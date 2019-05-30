@extends('plantilla')

@section('titulo')
    Iniciar sesion
@endsection

@section('contenido')
<div class="w3-container w3-block">
    <div class="w3-padding-64 w3-margin-left w3-margin-right w3-margin-bottom " >
        <div class= "w3-block" >
            <div class="card">
                <h1>Iniciar Sesión</h1>
                <div class="w3-bottombar w3-border-teal w3-margin-bottom"></div>
                <div class="w3-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="w3-half">
                                <h3>Email</h3>
                            </div>
                            <div class="w3-half w3-margin-top">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="w3-half">
                                <h3>Contraseña</h3>
                            </div>
                            <div class="w3-half w3-margin-top">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="w3-rest">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="w3-rest">
                                <button type="submit" class="w3-button w3-ripple w3-teal">
                                    Iniciar sesión
                                </button>
                            </div >
                                @if (Route::has('password.request'))
                                <div class="w3-rest">
                                    <a class="w3-rest" href="/register">
                                       No tienes cuenta? Registrate aqui
                                    </a>
                                </div>
                                @endif
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

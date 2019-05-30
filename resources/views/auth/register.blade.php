@extends('plantilla')

@section('titulo')
    Registrate
@endsection

@section('contenido')
<div class="w3-container w3-block">
    <div class="w3-padding-64 w3-margin-left w3-margin-right w3-margin-bottom" >
        <div class="w3-block">
            <div class="card">
                <h1>Regístrate</h1>
                <div class="w3-bottombar w3-border-teal w3-margin-bottom"></div>

                <div class="w3-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="w3-half">
                                <h3>Nombre</h3>
                            </div>
                            <div class="w3-half w3-margin-top">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="w3-half">
                                <h3>Email</h3>
                            </div>
                            <div class="w3-half w3-margin-top">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="w3-half">
                                <h3>Confirmar contraseña</h3>
                            </div>
                            <div class="w3-half w3-margin-top">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="w3-rest">
                                <button type="submit" class="w3-button w3-ripple w3-teal">
                                    Registrate
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

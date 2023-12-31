@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col s6 offset-m3">

            <div class="row"></div>
            <div class="row"></div>

            <div class="card green lighten-5">
                <div class="card-content">
                    <div style="color: black; font-weight: bold; text-align: center;" class="card-title">Inicio de sesión</div>
                        <div class="col s5 offset-s4">
                            <div class="row valign-wrapper">
                                <div class="col s12">
                                    <img class="card-img" src="{{ asset('images/augrm.png') }}" style="width: 80%;">
                                </div>
                            </div>
                        </div>

                    {{-- Mostrar mensaje de error de cuenta bloqueada --}}
                    @if ($errors->has('bloqueado'))
                        <div class="row">
                            <div class="col s12">
                                <div class="card red lighten-4">
                                    <div class="card-content">
                                        {{ $errors->first('bloqueado') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                            <div class="col s12 input-field">
                                <input type="text" name="email" id="email">
                                <label for="email">Email</label>
                                @error('email')
                                    <span class="red-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12 input-field">
                                <input type="password" name="password" id="password">
                                <label for="password">Contraseña</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col s12 center">
                                <button type="submit" class="btn btn-primary">
                                    ingresar
                                </button>
                                <div class="card-body text-center">
                                    <div>
                                        <p style="color: black; font-weight: bold;">Conoce nuestro sitio con este usuario de prueba</p>
                                        <p>Usuario:cliente@cliente.com<br>Contraseña:cliente</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

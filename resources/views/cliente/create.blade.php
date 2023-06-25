@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('cliente.store') }}">
            @csrf

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl8 offset-xl2">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Registro
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>


                        <div class="row">


                            <div class="input-field col s12 m6">
                                <input id="edad" type="text" class="validate" name="ci_cliente" value="{{old('ci_cliente')}}">
                                <label for="edad">C.I.  cliente</label>
                                @error('CI_cliente')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="nombre" type="text" class="validate" name="nombre" value="{{old('nombre')}}">
                                <label for="nombre">Nombres:</label>
                                @error('nombres')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="apellido" type="text" class="validate" name="apellido" value="{{old('apellido')}}">
                                <label for="apellido">Apellidos:</label>
                                @error('apellido')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="telefono" type="text" class="validate" name="telefono" value="{{old('telefono')}}">
                                <label for="telefono">Telefono:</label>
                                @error('telefono')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>                          




                        </div>

                        <div class="card-action right-align">
                            <button type="submit" class="btn-floating btn-large blue pulse"><i class="material-icons">save</i></a>
                        </div>


                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection

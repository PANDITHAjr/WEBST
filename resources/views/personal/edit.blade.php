@extends('layouts.app')
@section('content')
    <div class="row">
        <form method="POST" action="{{ route('personal.update', [$personal->id]) }}">
            @csrf
            @method('PUT')

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Edición
                        </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="input-field col s12 m6">
                            <input id="ci" type="text" class="validate" name="ci"
                                value="{{ $personal->ci }}">
                            <label for="ci">CI:</label>
                            @error('ci')
                                <span class="help-block red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="nombre" type="text" class="validate" name="nombre"
                                    value="{{ $personal->nombre }}">
                                <label for="nombre">Nombres:</label>
                                @error('nombre')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="apellido" type="text" class="validate" name="apellido"
                                    value="{{ $personal->apellido }}">
                                <label for="apellido">Apellidos:</label>
                                @error('apellido')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="direccion" type="text" class="validate" name="direccion"
                                    value="{{ $personal->direccion }}">
                                <label for="direccion">Dirección:</label>
                                @error('direccion')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="edad" type="number" class="validate" name="edad"
                                    value="{{ $personal->edad }}">
                                <label for="edad">Edad:</label>
                                @error('edad')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="phone" type="number" class="validate" name="telefono"
                                    value="{{ $personal->telefono }}">
                                <label for="phone">Telefono:</label>
                                @error('telefono')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="cat_lic" type="text" class="cat_lic" name="cat_lic"
                                    value="{{ $personal->cat_lic }}">
                                <label for="cat_lic">C. Lic:</label>
                                @error('cat_lic')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <select name="id_tipopersonal">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach ($tipopersonal as $personal)
                                        <option value="{{ $personal->id }}">{{ $personal->descripcion }}</option>
                                    @endforeach
                                </select>
                                <label for="id_tipopersonal">Personal:</label>
                            </div>

                            <div class="input-field col s12 m6">
                                <select name="id_sindicato">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach ($sindicato as $personal)
                                        <option value="{{ $personal->id }}">{{ $personal->nombre }}</option>
                                    @endforeach
                                </select>
                                <label for="id_sindicato">Sindicatos:</label>
                            </div>

                        </div>

                        <div class="card-action right-align">
                            <button type="submit" class="btn-floating btn-large blue pulse"><i
                                    class="material-icons">save</i></a>
                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
            <div id="panel-left" class="card">
                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Datos de las Rutas:
                    </span>

                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">
                        <div class="col s4 offset-s4">
                            <div class="row valign-wrapper">
                                <div class="col s12">
                                    <img src="https://www.opinion.com.bo/media/opinion/images/2011/08/31/2011N23716.jpg"
                                        alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Nombre:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{ $promocion->nombre }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Descripcion:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{ $promocion->descripcion }}</p>
                        </div>
                    </div>
                    <div class="card-action right-align">
                        <a href="{{ route('promocion.index') }}"
                            class="waves-effect waves-brown btn-flat red-text bold">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

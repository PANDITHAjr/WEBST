@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
            <div id="panel-left" class="card">
                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Datos del Mantenimiento:
                    </span>

                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">
                        <div class="col s4 offset-s4">
                            <div class="row valign-wrapper">
                                <div class="col s12">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1624/1624008.png"
                                        alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Placa:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{ $mantenimiento->vehiculo->placa }}</p>
                        </div>

                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Modelo:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$mantenimiento->vehiculo->modelo}}</p>
                        </div>
                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Descripcion:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{ $mantenimiento->descripcion }}</p>
                        </div>
                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Fecha:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{ $mantenimiento->fecha }}</p>
                        </div>
                        <div class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Monto(Bs.):</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{ $mantenimiento->monto }}</p>
                        </div>
                    </div>
                    <div class="card-action right-align">
                        <a href="{{ route('mantenimiento.index') }}"
                            class="waves-effect waves-brown btn-flat red-text bold">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

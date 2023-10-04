@extends('layouts.main')
@section('contenido')
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h1 class="fw-bold">Simulador de paginacion</h1>
            </div>
            <hr>
            <div class="col-md-4 mt-3">
                <div class="row">
                    <div class="col-md-12">
                        @include('modules/form_procesos')
                    </div>
                    <div class="col-md-6 mt-3">
                        @include('modules/card_procesos_activos')
                    </div>
                    <div class="col-md-6 mt-3">
                        @include('modules/card_procesos_espera')
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tabla de contenido</h5>
                        <p class="card-text">
                            @include('modules/tabla_contenido')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
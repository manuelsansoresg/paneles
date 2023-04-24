@extends('layouts.template')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="text-primary text-center pb-3">Computación</h2>
            </div>

        </div>


    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="col-12 col-md-2 mt-5">
                    <div class="text-center  px-3 py-3">
                        <h6>INSTALACIÓN DE SERVIDORES</h6>
                        <img class="img-fluid highlight" src="{{ asset('img/grupotim-computacion.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-2 mt-2">
                    <div class="text-center  px-3 py-3">
                        <img class="img-fluid highlight" src="{{ asset('img/grupotim-mantenimiento.jpg') }}" alt="">
                        <h6 class="mt-2">MANTENIMIENTO</h6>
                        <span class="text-muted"> - Preventivo <br> </span>
                        <span class="text-muted"> - Correctivo </span>
                    </div>
                </div>
                <div class="col-12 col-md-2 mt-5">
                    <div class="text-center  px-3 py-3">
                        <h6>DESARROLLO WEB</h6>
                        <img class="img-fluid highlight" src="{{ asset('img/grupotim-web.jpg') }}" alt="">
                        <span class="text-muted"> - Hosting <br> </span>
                        <span class="text-muted"> - Diseño de sitios<br> </span>
                        <span class="text-muted"> - Informativos<br> </span>
                        <span class="text-muted"> - Administrables </span>
                    </div>
                </div>
                <div class="col-12 col-md-2 mt-2">
                    <div class="text-center  px-3 py-3">
                        <img class="img-fluid highlight" src="{{ asset('img/grupotim-redes.jpg') }}" alt="">
                        <h6 class="mt-2">REDES</h6>
                    </div>
                </div>
                <div class="col-12 col-md-2 mt-5">
                    <div class="text-center  px-3 py-3">
                        <h6>REPARACIÓN DE COMPUTADORAS</h6>
                        <img class="img-fluid highlight" src="{{ asset('img/grupotim-reparacion-computadoras.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.template')
@section('content')
   <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="text-primary text-center">Camaras</h2>
            </div>
            @foreach ($cameras as $key => $camera)
               <div class="col-12 col-md-4 mt-5">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>
                                {{ $camera->name }}
                            </h3>
                        </div>
                        <div class="card-body">
                            @if ($camera->image != '')
                               <div class="text-center">
                                    <img  src="{{ asset('products/'.$camera->image) }}" alt="">
                               </div>
                            @endif
                            <p class="card-text"> {!! $camera->description_short !!} </p>
                            <div class="accordion" id="mi-acordeon">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="heading-1">
                                    <button class="accordion-button collapsed bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $key }}" aria-expanded="false" aria-controls="collapse-1">
                                        + Información
                                    </button>
                                  </h2>
                                  <div id="collapse-{{ $key }}" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#mi-acordeon">
                                    <div class="accordion-body">
                                        {!! $camera->description !!}
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
        @endforeach
        </div>
        <div class="col-12 text-center mt-5">
            <span style="color:red; font-size:0.8em">.:: Los precios de los paquetes no incluyen instalación ::.<br>
                .:: Precios más IVA sujeto a cambios sin previo aviso, pueden variar por el valor del dólar al día ::.</span>
        </div>
   </div>
@endsection
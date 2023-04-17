@extends('layouts.template')
@section('content')
   <div class="container">
        <div class="row mt-5">
            <div class="col-12 pb-5">
                <h2 class="text-primary text-center">PANELES SOLARES</h2>
            </div>
            @foreach ($panels as $panel)
               <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>
                                {{ $panel->name }}
                            </h3>
                        </div>
                        <div class="card-body">
                            @if ($panel->image != '')
                               <div class="text-center">
                                    <img  src="{{ asset('products/'.$panel->image) }}" alt="">
                               </div>
                            @endif
                            <p class="card-text"> {!! $panel->description_short !!} </p>
                            <div class="accordion" id="mi-acordeon">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="heading-1">
                                    <button class="accordion-button collapsed bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                        + Información
                                    </button>
                                  </h2>
                                  <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#mi-acordeon">
                                    <div class="accordion-body">
                                        {!! $panel->description !!}
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
        @endforeach
        </div>
   </div>
@endsection
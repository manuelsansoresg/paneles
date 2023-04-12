@extends('adminlte::page')

@section('title', 'Crear banner')

@section('content_header')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>Formulario</h1>
             
            </div>
            <div class="col-12 col-md-8">
                <a href="/admin/banner" class="btn btn-primary float-right my-3">Volver</a>
            </div>
        </div>
       
    </div>
@stop

@section('content')
    
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-body">
                  
                    <div class="col-12">
                        <small id="emailHelp" class="form-text text-info"> Los campos marcados con * son obligatorios. </small>
                        <form id="frm-banner">
                            @csrf
                            @if ($banner != null && $banner->image  != '')
                                <div class="text-center">
                                    <img src="/banners/{{ $banner->image }}" alt="" style="width: 100px">
                                    <div class="col-12 py-3">
                                        <a href="/admin/banner/img/{{ $banner->id }}/delete" class="btn btn-danger btn-sm">Borrar</a>
                                </div>
                                </div>
                               
                                @else
                                <div class="form-group">
                                    <label for="exampleInputEmail1">*Imagen</label>
                                    <input type="file" class="form-control" name="image" id="image" required>
                                    <small id="emailHelp" class="form-text text-muted"> Medida del banner: 1920 x 400, formatos: jpg, png, gif. </small>
                                </div>
                            @endif
                            

                            <div class="form-group">
                                <label for="exampleInputEmail1">*Título</label>
                                <input type="text" class="form-control" name="data[title]" required value="{{ ($banner != null) ? $banner->title : null }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">*Fecha inicial</label>
                                <input type="date" class="form-control" name="data[date_init]" id="fecha_inicial" required pattern="\d{4}-\d{2}-\d{2}" placeholder="yyyy/mm/dd" value="{{ ($banner != null) ? $banner->date_init : null }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">*Fecha final</label>
                                <input type="date" class="form-control" name="data[date_fin]" id=fecha_final required pattern="\d{4}-\d{2}-\d{2}" placeholder="yyyy/mm/dd" value="{{ ($banner != null) ? $banner->date_fin : null }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea name="data[description]" id="" cols="30" rows="4" class="form-control">{{ ($banner != null) ? $banner->description : null }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">URL</label>
                                <input type="text" class="form-control" name="data[url]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descripción</label>
                                <textarea name="data[observation]" id="" cols="30" rows="4" class="form-control">{{ ($banner != null) ? $banner->observation : null }}</textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary float-right">Guardar</button>
                            </div>
                            <input type="hidden" name="banner_id" value="{{ $banner_id }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
@stop
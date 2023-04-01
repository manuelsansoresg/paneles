@extends('adminlte::page')

@section('title', 'Banner')

@section('content_header')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>Listado de banners</h1>
            </div>
            <div class="col-12  col-md-8">
                <a href="/admin/banner/create" class="btn btn-primary float-right my-3">Crear banner</a>
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
                 
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Descripción</th>
                                <th>Fecha inicial</th>
                                <th>Fecha final</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $banner)
                            <tr>
                                   <td>{{ $banner->id }}</td>
                                   <td> {{ $banner->title }} </td>
                                   <td> {{ $banner->description }} </td>
                                   <td> {{ $banner->date_init }} </td>
                                   <td> {{ $banner->date_fin }}</td>
                                   <td> 
                                    <a href="/admin/banner/{{ $banner->id}}/edit" class="btn btn-primary btn-sm">Editar</a>        
                                    <a class="btn btn-danger btn-sm" style="cursor: pointer;">Eliminar</a>        
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 </div>
@stop
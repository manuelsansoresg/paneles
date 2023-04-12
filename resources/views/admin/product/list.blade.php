@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>Listado de productos</h1>
            </div>
            <div class="col-12  col-md-8">
                <a href="/admin/product/create" class="btn btn-primary float-right my-3">Crear producto</a>
            </div>
        </div>
       
    </div>
@stop

@section('content')
    
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-11 col-lg-10">
            <div class="card">
                <div class="card-body">
                 
                    <table id="dt-product" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Código</th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Moneda</th>
                                <th>Precio MXN</th>
                                <th>Registro</th>
                                <th>Estatus</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                   <td>{{ $product->id }}</td>
                                   <td> {{ $product->code }} </td>
                                   <td> {{ $product->name }} </td>
                                   <td> {{ $product->price }} </td>
                                   <td> {{ config('enums.moneda')[$product->moneda_id] }}</td>
                                   <td> {{ $product->price / 100 }}</td>
                                   <td> {{ $product->created_at }}</td>
                                   <td> <span class="badge {{ $product->status == 1 ? 'bg-success' : 'bg-danger' }}">{{ config('enums.estatus')[$product->status] }}</span></td>
                                   <td> 
                                    <a href="/admin/product/{{ $product->id}}/edit" class="btn btn-primary btn-sm">Editar</a>        
                                    <a href="/admin/product/{{ $product->id}}/delete" class="btn btn-danger btn-sm" style="cursor: pointer;">Eliminar</a>        
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
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
                                @php
                                    $price = $product->price  / 100;
                                    $dollar = $product->val_dolar  / 100;
                                    $total_price = $product->moneda_id == 1 ? $price * $dollar : $price;
                                @endphp
                                   <td> {{ $product->id }}</td>
                                   <td> {{ $product->code }} </td>
                                   <td> {{ $product->name }} </td>
                                   <td> {{ $price }} </td>
                                   <td> {{ config('enums.moneda')[$product->moneda_id] }}</td>
                                   <td> {{ $total_price }}</td>
                                   <td> {{ $product->created_at }}</td>
                                   <td> <span class="badge {{ $product->status == 1 ? 'bg-success' : 'bg-danger' }}">{{ config('enums.estatus')[$product->status] }}</span></td>
                                   <td> 
                                    <a href="#" onclick="modalPrice({{ $product->id }}, {{ $product->moneda_id }}, {{ ($product != null) ? $product->price / 100 : null }})" class="btn btn-sm btn-secondary"><i class="fas fa-dollar-sign"></i></a>        
                                    <a href="/admin/product/{{ $product->id}}/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>        
                                    <a href="/admin/product/{{ $product->id}}/delete" class="btn btn-danger btn-sm" style="cursor: pointer;"><i class="fas fa-trash"></i></a>        
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
 <div id="modal-price" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="my-modal-title">Modificar precio</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <small class="text-success">Al modificar el precio del dolar se guardara el valor del dolar actual y sustituye el valor anterior</small>
                <form id="frm-product">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">*Moneda</label>
                        <select name="data[moneda_id]" id="moneda_id" class="form-control" required>
                            <option value="">Seleccione una opción</option>
                            <option value="1">Dolar</option>
                            <option value="2">Pesos Méxicanos</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">*Precio</label>
                        <input type="number" class="form-control" name="data[price]" id="price" step="0.01" min="0"  placeholder="Escriba el nombre del producto" value="" required>
                    </div>
                    <input type="hidden" name="product_id" id="product_id" value="">
                    <div class="form-group">
                        <button class="btn btn-primary float-right">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>
@stop
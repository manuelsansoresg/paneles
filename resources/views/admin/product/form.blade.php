@extends('adminlte::page')

@section('title', 'Crear producto')

@section('content_header')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>Formulario</h1>
             
            </div>
            <div class="col-12 col-md-8">
                <a href="/admin/product" class="btn btn-primary float-right my-3">Volver</a>
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
                        <form id="frm-product">
                            @csrf
                            @if ($product != null && $product->image  != '')
                                <div class="text-center">
                                    <img src="/products/{{ $product->image }}" alt="" style="width: 100px">
                                    <div class="col-12 py-3">
                                        <a href="/admin/product/img/{{ $product->id }}/delete" class="btn btn-danger btn-sm">Borrar</a>
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
                                <label for="exampleInputEmail1">*Tipo de producto</label>
                                <select name="data[type]" id="" class="form-control" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1" {{ ($product != null && $product->type == 1) ? 'selected' : null }}>Paneles solares</option>
                                    <option value="2" {{ ($product != null && $product->type == 2) ? 'selected' : null }}>Cámaras de seguridad</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">*Codigo</label>
                                <input type="text" class="form-control" name="data[code]"  placeholder="Escriba el código" value="{{ ($product != null) ? $product->code : null }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">*Nombre del producto</label>
                                <input type="text" class="form-control" name="data[name]"  placeholder="Escriba el nombre del producto" value="{{ ($product != null) ? $product->name : null }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Descripción</label>
                                <textarea name="data[description]" id="" cols="30" rows="4" class="form-control">{{ ($product != null) ? $product->description : null }}</textarea>
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">*Moneda</label>
                                <select name="data[moneda_id]" id="" class="form-control" required>
                                    <option value="">Seleccione una opción</option>
                                    <option value="1" {{ ($product != null && $product->moneda_id == 1) ? 'selected' : null }}>Dolar</option>
                                    <option value="2" {{ ($product != null && $product->moneda_id == 2) ? 'selected' : null }}>Pesos Méxicanos</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">*Precio</label>
                                <input type="number" class="form-control" name="data[price]" step="0.01" min="0"  placeholder="Escriba el nombre del producto" value="{{ ($product != null) ? $product->price / 100 : null }}" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Observaciones</label>
                                <textarea name="data[observations]" id="" cols="30" rows="4" class="form-control">{{ ($product != null) ? $product->observations : null }}</textarea>
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">*Estatus</label>
                                <select name="data[status]" id="" class="form-control" required>
                                    <option value="1" {{ ($product != null && $product->status == 1) ? 'selected' : null }}>Activo</option>
                                    <option value="0" {{ ($product != null && $product->status == 0) ? 'selected' : null }}>Inactivo</option>
                                </select>
                            </div>
                           {{-- 
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
                                <label for="exampleInputEmail1">Description</label>
                                <textarea name="data[observation]" id="" cols="30" rows="4" class="form-control">{{ ($banner != null) ? $banner->observation : null }}</textarea>
                            </div> --}}
                            <div class="form-group">
                                <button class="btn btn-primary float-right">Guardar</button>
                            </div>
                            <input type="hidden" name="product_id" value="{{ $product_id }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
@stop
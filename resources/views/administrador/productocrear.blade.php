@extends('administrador/layout')

@section('body-content')

<h2 class="text-center">Crear nuevo Producto</h2>

<div class="card">
    <div class="card-body">
    <form action="/productos/crear" method="post" class="form">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Marca</label>
                    <select name="marca_id" id="marca_id" class="form-control">
                        @foreach ($marcas as $marca)
                        <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Stock</label>
                    <input type="number" name="marca_id" id="marca_id" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Stock Minimo</label>
                    <input type="number" name="stockmin" id="stockmin" value="" class="form-control">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Ganancia</label>
                    <input type="number" name="ganancia" id="ganancia" value="" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
                <!--button type="submit" class="btn btn-primary">Guardar</!--button-->
            <input type="submit" value="Guardar" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection
@extends('administrador/layout')
@section('body-content')

<h2>Listado de Productos</h2>

<table class="table table-responsive">
  <thead>
    <tr>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Talla</th>
      <th>Color</th>
      <th>Categoria</th>
	  <th>Sexo</th>
	  <th>Stock</th>
	  <th>Stock minimo</th>
	  <th>Precio Costo</th>
	  <th>Precio Venta</th>
	  <th>Ganancia</th>
	  <th>Oferta</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($productos as $producto)
    <tr>
      <td>{{$producto->marca_id}}</td>
      <td>{{$producto->modelo_id}}</td>
      <td>{{$producto->talla_id}}</td>
      <td>{{$producto->color_id}}</td>
	  <td>{{$producto->categoria_id}}</td>
	  <td>{{$producto->sexo_id}}</td>
	  <td>{{$producto->stock}}</td>
	  <td>{{$producto->stockmin}}</td>
	  <td>{{$producto->preciocosto}}</td>
	  <td>{{$producto->precioventa}}</td>
	  <td>{{$producto->ganancia}}</td>
	  <td>{{$producto->oferta_id}}</td>

      <td>
        <a href="/productos/{{$producto->id}}/editar" 
           class="btn btn-small btn-primary">Editar</a>
        
        <form action="#" class="d-inline" method="post">
            @csrf
            <button class="btn btn-small btn-danger delete"
                    onclick="return confirm('¿Quieres Borrar?')">Elimiar</button>
        </form>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="3">No hay datos</td>
    </tr>
  @endforelse
 
  </tbody>

@endsection
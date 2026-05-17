@extends('layouts.app')
@section('title', 'Editar Producto')
@section('content')
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST" >
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}">
        </div>

        <div class="form-group">
          <label for="">Precio</label>
          <input type="text" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}">
        </div>

        <div class="form-group">
          <label for="stock">Stock:</label>
          <input type="number" id="stock" name="stock" class="form-control" value="{{ $producto->stock }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Actualizar Producto</button>
    </form>
    <br>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver a la lista de productos</a>
@endsection


@extends('layouts.app')
@section('title', 'Crear Producto')
@section('content')
    <h1>Crear Producto</h1>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre" required>
        </div>

        <div class="form-group">
          <label for="">Precio</label>
          <input type="number" step="0.01" class="form-control" name="precio" id="precio" required>
        </div>

        <div class="form-group">
          <label for="">Stock</label>
          <input type="text" class="form-control" name="stock" id="stock" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Producto</button>
    </form>
    <br>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver a la lista de productos</a>
@endsection
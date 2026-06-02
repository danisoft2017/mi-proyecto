@extends('layouts.app')
@section('title', 'Editar Producto')
@section('content')
    <h1>Editar Producto</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('producto.update', $producto->id) }}" method="POST" >
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $producto->nombre) }}">
        </div>

        <div class="form-group">
          <label for="">Precio</label>
          <input type="text" name="precio" id="precio" class="form-control" value="{{ old('precio', $producto->precio) }}">
        </div>

        <div class="form-group">
          <label for="stock">Stock:</label>
          <input type="number" id="stock" name="stock" class="form-control" value="{{ old('stock', $producto->stock) }}" >
        </div>

        <div class="btn-group  mt-3">
          <button type="submit" class="btn btn-primary">Actualizar Producto</button>
          <a href="{{ route('producto.index') }}" class="btn btn-secondary">Volver a la lista de productos</a>
        </div>
    </form>
    <br>
@endsection


@extends('layouts.app')
@section('title', 'Crear Producto')
@section('content')
    <h1>Crear Producto</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('producto.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" >
        </div>

        <div class="form-group">
          <label for="">Precio</label>
          <input type="text" step="0.01" class="form-control" name="precio" id="precio" value="{{ old('precio') }}" >
        </div>

        <div class="form-group">
          <label for="">Stock</label>
          <input type="text" class="form-control" name="stock" id="stock" value="{{ old('stock') }}" >
        </div>
        <div class="btn-gr mt-3">
          <button type="submit" class="btn btn-primary">Crear Producto</button>
          <a href="{{ route('producto.index') }}" class="btn btn-secondary">Volver a la lista de productos</a>
        </div>
    </form>
    <br>
@endsection
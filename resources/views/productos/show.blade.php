
@extends('layouts.app')
@section('title', 'Detalles del Producto')
@section('content')
    <h1>Detalles del Producto</h1>
    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
    <p><strong>Precio:</strong> {{ $producto->precio }}</p>
    <p><strong>Stock:</strong> {{ $producto->stock }}</p>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver a la lista de productos</a>
    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">Editar Producto</a>
@endsection

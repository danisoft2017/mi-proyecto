@extends('layouts.app')
@section('title', 'Productos')
@section('content')
    <h1>Lista de productos</h1>
    <div class="btn-group mb-3" role="group" aria-label="Basic example">
        <a href="{{ route('inicio') }}" class="btn btn-secondary"><i class="fa-solid fa-house"></i></a>
        <a href="{{ route('productos.create') }}" class="btn btn-primary">Nuevo Producto</a>
    </div>
    <br>
    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>
                        <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@push('scripts')
    <script>
        alert("Bienvenido al CRUD de Productos");
    </script>
@endpush
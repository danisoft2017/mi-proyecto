@extends('layouts.app')
@section('title', 'Crear Cliente')
@section('content')
    <h1>Crear Nuevo Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" required>
        </div>
        <div class="btn-group mt-3" role="group" aria-label="Basic example">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
@endsection
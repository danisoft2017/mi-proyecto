@extends('layouts.app')
@section('title', 'Editar Cliente')
@section('content')
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $cliente->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $cliente->email }}" required>
        </div>
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $cliente->telefono }}" required>
        </div>
        <div class="form-group">
            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $cliente->direccion }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
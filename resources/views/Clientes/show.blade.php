@extends('layouts.app')
@section('title', 'Ver Cliente')
@section('content')
    <h1>Ver Cliente</h1>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $cliente->nombre }}" readonly>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $cliente->email }}" readonly>
    </div>
    <div class="form-group">
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $cliente->telefono }}" readonly>
    </div>
    <div class="form-group">
        <label for="direccion">Direccion:</label>
        <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $cliente->direccion }}" readonly>
    </div>
    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver</a>
@endsection
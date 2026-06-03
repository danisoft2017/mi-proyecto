@extends('layouts.app')
@section('title', 'Crear Cliente')
@section('content')
    <h1>Crear Nuevo Cliente</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" >
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" >
        </div>
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono') }}" >
        </div>
        <div class="form-group">
            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ old('direccion') }}" >
        </div>
        <div class="btn-group mt-3" role="group" aria-label="Basic example">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
@endsection
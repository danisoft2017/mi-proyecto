@extends('layouts.app')
@section('title', 'Editar Cliente')
@section('content')
    <h1>Editar Cliente</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $cliente->nombre) }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{old('email', $cliente->email) }}">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control" value="{{old('telefono', $cliente->telefono) }}">
        </div>
        <div class="form-group">
            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{old('direccion', $cliente->direccion) }}">
        </div>
        <div class="btn-group mt-3" role="group" aria-label="Basic example">
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>  
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@endsection
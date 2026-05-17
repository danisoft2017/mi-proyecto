@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
    <h1>Bienvenido a la página de inicio</h1>
    <p>Esta es la página de inicio de nuestro sitio web.</p>
    <a href="{{ route('productos.index') }}">Ir a Crud de Productos</a>
@endsection

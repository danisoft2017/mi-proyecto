@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
    <h1>Bienvenido a la página de inicio</h1>
    <ul>
        <li><a href="{{ route('productos.index') }}" class="link-offset-2 link-underline link-underline-opacity-0"><i class="fa-solid fa-gift"></i> Productos</a></li>
        <li><a href="{{ route('clientes.index') }}" class="link-offset-2 link-underline link-underline-opacity-0"><i class="fa-solid fa-people-group"></i> Clientes</a></li>
    </ul>

@endsection

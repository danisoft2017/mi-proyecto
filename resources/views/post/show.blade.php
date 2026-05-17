
@extends('layouts.app')

@section('title', 'Detalles del Post')
@section('content')
    <x-alert type="primary">
        <x-slot name="title">
            Detalles del Post {{$post}}
        </x-slot>
        <x-slot name="message">
            N° {{$post}} :Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam odit saepe ad suscipit dolore commodi fugiat, delectus perferendis consequuntur ducimus similique nesciunt numquam ipsum illum maxime quidem excepturi fuga perspiciatis?.
        </x-slot>
        Aquí puedes ver toda la información relacionada con el post seleccionado.
    </x-alert>
@endsection
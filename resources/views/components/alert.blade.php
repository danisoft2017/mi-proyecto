{{-- infor valor por defecto --}}
@props(['type' => 'primary'])
@php
    switch ($type) {
        case 'info':
            $class='alert-info';
            break;
        case 'warning':
            $class='alert-warning'; 
            break;
        case 'danger':
            $class='alert-danger';
            break;
        case 'success':
            $class='alert-success';
            break;
        default:
            $class='alert-primary';
    }
@endphp

<div class="alert {{ $class }} mt-3" role="alert">
  <h4 class="alert-heading">{{$title ?? 'Alerta'}}</h4>
  <p>{{$message ?? 'Este es un mensaje de alerta.'}}</p>
  <hr>
  <p class="mb-0">{{$slot}}</p>
</div>
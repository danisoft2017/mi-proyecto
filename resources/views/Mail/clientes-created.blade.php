<x-mail::message>
# Nuevo Cliente Creado
Se ha creado un nuevo cliente con los siguientes detalles:
<x-mail::panel>
- **Nombre:** {{ $clientes->nombre }}
- **Correo Electrónico:** {{ $clientes->email }}
- **Teléfono:** {{ $clientes->telefono }}

</x-mail::panel>
<x-mail::button :url="route('clientes.show', $clientes->id)" color="success">
Contactar Cliente
</x-mail::button>
¡Gracias por usar nuestra aplicación!
</x-mail::message>

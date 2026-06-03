<x-mail::message>
# Nuevo Cliente Creado
Se ha creado un nuevo cliente con los siguientes detalles:
<x-mail::panel>
lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, doloremque!
</x-mail::panel>
<x-mail::button :url="route('clientes.show', $clientes)" color="success">
Contactar Cliente
</x-mail::button>
¡Gracias por usar nuestra aplicación!
</x-mail::message>

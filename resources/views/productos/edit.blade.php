<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
        <br>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" value="{{ $producto->precio }}" required>
        <br>
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" value="{{ $producto->stock }}" required>
        <br>
        <button type="submit">Actualizar Producto</button>
    </form>
    <br>
    <a href="{{ route('productos.index') }}">Volver a la lista de productos</a>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
    @vite('resources/css/app.css')
</head>
<body>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label for="price">Precio:</label>
            <input type="number" name="price" required>
        </div>
        <button type="submit">Guardar Producto</button>
    </form>
</body>
</html>

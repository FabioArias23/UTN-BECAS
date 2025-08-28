<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuestros Productos</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100 font-sans p-8">

    <div class="container mx-auto">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Lista de Productos</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($products as $product)
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                <h2 class="text-2xl font-semibold text-gray-700 mb-2">{{ $product['name'] }}</h2>
                <p class="text-gray-600 mb-4">{{ $product['description'] }}</p>
                <span class="text-xl font-bold text-blue-600">${{ number_format($product['price'], 2) }}</span>
            </div>
            @endforeach
        </div>
    </div>

</body>
</html>

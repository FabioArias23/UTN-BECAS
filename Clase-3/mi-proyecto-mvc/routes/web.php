<?php




use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// ... otras rutas que ya tengas (como Route::get('/productos', ...))

// Ruta para mostrar el formulario de creación
Route::get('/productos/crear', [ProductController::class, 'create'])->name('products.create');

// Esta es la ruta que te falta y causa el error
Route::post('/productos', [ProductController::class, 'store'])->name('products.store');

Route::post('/productos', [ProductController::class, 'store'])->name('products.store');

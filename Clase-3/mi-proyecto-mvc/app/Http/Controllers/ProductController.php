<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products= [
            ['name' => 'laptop', 'price' => 1200, 'description' =>'Potente y ligera'],
            ['name' => 'soy una compu', 'price' => 1300, 'description' =>'Potente'],
            ['name' => 'soy un mouse', 'price' => 100, 'description' =>'Ligero']
        ];

        //retornar la vista de 'products.index' y le pasa los datos de los productos

        return view('products.index', compact('products'));

    }
    public function create()
{
    return view('products.create');
}


    public function store(Request $request)
    {
        // 1. Validar los datos
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        // 2. Guardar el nuevo producto en la base de datos
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        // 3. Redirigir y mostrar un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Producto creado exitosamente!');
    }




}

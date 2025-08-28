<?php

namespace App\Http\Controllers;


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


}

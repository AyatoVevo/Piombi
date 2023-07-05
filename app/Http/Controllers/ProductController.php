<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            $products = [
                new Product(['name' => 'Piombi 1', 'description' => 'piombi da lancio', 'img' => 'img\dalancioA.png', 'category' => 'Lancio']),
                new Product(['name' => 'Piombi 2', 'description' => 'piombi da lancio esagonali', 'img' => 'img\dalancioB.png', 'category' => 'Lancio']),
                new Product(['name' => 'Piombi 3', 'description' => 'ancoretto feeder', 'img' => 'img\feederA.png', 'category' => 'Feeder']),
                new Product(['name' => 'Piombi 4', 'description' => 'feeder per pastura', 'img' => 'img\feederB.png', 'category' => 'Feeder']),
                new Product(['name' => 'Piombi 5', 'description' => 'quadrato inline con silicone', 'img' => 'img\inline quadrati2.png', 'category' => 'Inline']),
            ];

            

          

            return view('index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}

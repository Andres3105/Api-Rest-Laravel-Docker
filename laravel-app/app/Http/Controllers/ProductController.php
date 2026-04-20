<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // GET /products
    public function index()
    {
        return Product::all();
    }

    // POST /products
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    // GET /products/{id}
    public function show($id)
    {
        return Product::findOrFail($id);
    }

    // PUT /products/{id}
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json($product, 200);
    }

    // DELETE /products/{id}
    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(null, 204);
    }
}
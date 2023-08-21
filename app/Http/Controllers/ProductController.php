<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductDto;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('ingredients')
            ->where('on_sale', true)
            ->get();


        return ProductDto::collection($products);
    }

    public function show(Request $request, int $id) {
        $product = Product::with('ingredients')
            ->where('on_sale', true)
            ->where('id', $id)
            ->firstOrFail();

        return ProductDto::from($product);
    }
}

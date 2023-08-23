<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\ProductDto;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = self::baseQuery()->get();

        return ProductDto::collection($products);
    }

    public static function baseQuery()
    {
        return Product::where('on_sale', true);
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|string|min:3',
            'limit' => 'integer|min:1|max:20',
        ]);

        $products = self::baseQuery()
            ->where('name', 'like', '%'.$request->input('query').'%')
            ->limit($request->input('limit', 5))
            ->get();

        return ProductDto::collection($products);
    }

    public function show(Request $request, int $id)
    {
        $product = Product::with('ingredients.measurementUnit')
            ->where('on_sale', true)
            ->where('id', $id)
            ->firstOrFail();

        return ProductDto::from($product);
    }
}

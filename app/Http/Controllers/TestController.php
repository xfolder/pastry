<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $p = Product::find(1);

        dd($p->images);

    }
}

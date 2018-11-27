<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function getProducts()
    {
        $products = Product::where('stock', '<>', 0)->get();
        return response()->json(['products' => $products], 200);
    }
    public function getProductDetail($id)
    {
        $detail = Product::find($id);
        return response()->json(['detail' => $detail], 200);
    }
}

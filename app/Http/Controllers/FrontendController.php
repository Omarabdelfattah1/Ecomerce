<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index')->with('products',Product::paginate(3));
    }

    public function singleProduct(Product $product)
    {
        return view('products.singleProduct',['product'=>$product]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('index', ['products' => $products]);
    }
    
    public function categories()
    {
        $categories = Category::get();
        return view('categories', ['categories' => $categories]);
    }
    
    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        return view('category', ['category' => $category]);
    }
    
    public function product($category, $product = null)
    {
        return view('product', ['product' => $product]);
    }
    
    public function basket()
    {
        dd(request());
        return view('basket');
    }
    
    public function order()
    {
        return view('order');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->active()->get();

        $data = [
            'title' => 'Home',
            'products' => $products,
        ];

        return view('home.index', $data);
    }

    public function detail($slug)
    {
        $product = Product::slug($slug)->firstOrFail();

        $title = 'Top up ' . Str::lower($product->name  . ' ' . $product->type);
        $data = [
            'title' => $title,
            'product' => $product
        ];

        return view('home.detail', $data);
    }
}

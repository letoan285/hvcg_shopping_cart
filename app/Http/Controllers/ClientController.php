<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ClientController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::where('status', 1)->orderBy('id', 'desc')->paginate(12);

        return view('web.index', compact('products'));
    }
}

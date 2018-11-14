<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ClientController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::where('status', 1)->orderBy('id', 'desc')->paginate(12);

        return view('web.index', compact('products'));
    }

    public function getAllProductsByCategory($cate_id)
    {
        $products = Category::find($cate_id)->products;
        $category = Category::find($cate_id);
        //dd($products);
    	//$categories = Category::all();
    	return view('web.categories.show-products', compact('products', 'category'));
    }

    public function showProduct($id)
    {
        $product = Product::findOrFail($id);

        return view('web.products.show', compact('product'));
    }

    public function getAllCategories()
    {
        //$categories = Category::where('status', '<>', 0)->get();

        
    }
}

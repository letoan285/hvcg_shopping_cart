<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $pageSize = $request->pageSize ?? 10;

        $products = DB::table('products')->orderBy('id', 'desc')->paginate($pageSize);
        
        return view('admin.products.index', ['products'=>$products]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $product = new Product();

        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->status = $request->status;
        $product->list_price = $request->list_price;
        $product->selling_price = $request->selling_price;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = time().'-'.$file->getClientOriginalName();
            $file->storeAs('uploads/products', $fileName);
            $product->image = 'uploads/products/'.$fileName;
        }

        // $product->category_id = $request->name;

        $product->save();  
    

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        // dd($product);
        $categories = Category::all();

        return view('admin.products.edit', compact('categories', 'product'));
    }

    public function update(Request $request, $id)
    {
        dd($request->all());

        return view('admin.products.edit', compact('categories'));
    }
    public function show($id){
        $product = Product::find($id);
        //dd($product);
    }
}

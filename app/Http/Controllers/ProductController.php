<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $tags = Tag::all();
        $pageSize = $request->pageSize ?? 10;

        $products = DB::table('products')->orderBy('id', 'desc')->paginate($pageSize);
        
        return view('admin.products.index', ['products'=>$products, 'tags'=>$tags]);
    }

    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.products.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        // dd($request->tag);

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

        $product->tags()->sync($request->tag, false);
    

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $tags = Tag::all();
        $product = Product::findOrFail($id);
        // dd($product);
        $categories = Category::all();

        return view('admin.products.edit', compact('categories', 'product', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

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

        $product->update();  

        $product->tags()->sync($request->tag);
    

        return redirect()->route('products.index');
    }
    public function show($id){
        $product = Product::find($id);
        //dd($product);
    }

    public function destroy($id){
        $product = Product::find($id);

        $product->delete();

        return redirect()->back();
    }
}

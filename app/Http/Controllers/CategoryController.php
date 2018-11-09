<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Http\Requests\StoreCategory;

class CategoryController extends Controller
{

    //
    public function index()
    {
        $categories = Category::all();

        //$categories = DB::table('categories')->where('status', 1)->get();
        //$categories = DB::select(DB::raw("select * from categories where status != 0"));

    	return view('admin.categories.index', compact('categories'));
    }
    
    public function create()
    {
    	return view('admin.categories.create');
    }

    public function store(StoreCategory $request)
    {



        $cate = new Category();

        $cate->name = $request->name;
        $cate->slug = str_slug($request->name);
        $cate->status = $request->status;
        $cate->parent_id = $request->parent_id;
        $cate->image = 'noimage.png';

        $cate->save();

        return redirect()->route('categories.index');
    
    }
}

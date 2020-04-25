<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $items = Category::all();
        // return $items;
        return view('categories' , compact('items'));
    }
    public function create()
    {
        return view('category-create');
    }
    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect(route('categories.index'));
    }
    public function edit($id)
    {
        $item = Category::findOrFail($id);
        return view('category-edite' , compact('item'));
    }
    public function update($id , Request $request)
    {
        Category::find($id)->update($request->all());
        return redirect(route('categories.index'));
    }
    public function delete($id)
    {
        $category = Category::findOrFail($id) ;
         $category->products()->delete();
         $category->delete();
         return redirect(route('categories.index'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    public function index()
    {
        $items = Product::all();
        // return $items;
        return view('products' , compact('items'));
    }
    public function create()
    {
        $items = Category::all();
        return view('Product-create' , compact('items'));
    }
    public function store(Request $request)
    {
        $requestArray  = $request->all() ;
        $photo = $request->file('image');
        $fileName = time().str_random('10').'.'.$photo->getClientOriginalExtension();
        $destinationPath = public_path('uploads/');
        $photo->move($destinationPath,$fileName );
        $requestArray['image'] = 'uploads/'. $fileName ;

        Product::create($requestArray);
        return redirect(route('products.index'));
    }
    public function edit($id)
    {
        $item = Product::findOrFail($id);
        $items = Category::all();
        return view('Product-edit' , compact('item' , 'items'));
    }
    public function update($id , Request $request)
    {
        Product::find($id)->update($request->all());
        return redirect(route('products.index'));
    }
    public function delete($id)
    {
        $Product = Product::findOrFail($id) ;
         return redirect(route('products.index'));
    }
}

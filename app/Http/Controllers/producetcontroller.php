<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class producetcontroller extends Controller
{
    public function index()
    {

        return view('products.index', ['products' => product::get()]);
    }
    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)

    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000'
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        $product = new product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();


        return back()->withSuccess('products created !!!!');
    }

    public function edit($id)
    {
        $product = product::where('id', $id)->first();

        return view('products.edit', ['product' => $product]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => '_nullable|mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        $product = product::where('id', $id)->first();

        if (isset($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }

        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();


        return back()->withSuccess('products updated !!!!');
    }


    public function destroy($id)

    {
        $product = product::where('id', $id)->first();
        $product->delete();
        return back()->withSuccess('products delete !!!!');
    }
}

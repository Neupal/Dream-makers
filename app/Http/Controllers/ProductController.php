<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    $image = new Product();
    $image->title=$request['title'];
    $image->description=$request['description'];
    $uploadedImage = $request->file('image');
    $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
    $destinationPath = public_path('images');
    $uploadedImage->move($destinationPath, $imgName);
    $image->image = $imgName;

    $image->link=$request['link'];
    $image->save();
    return redirect('productview');
}
    /**
     * Display the specified resource.
     */
    public function view()
    {
        $data = Product::all();
        return view('product.index', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Product::find($id);
        if(is_null($data)){
        return redirect('productview');
        }
        else{
            return view('product.edit', compact('data'));
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $image = Product::find($id);
    $image->title=$request['title'];
    $image->description=$request['description'];
    $uploadedImage = $request->file('image');
    $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
    $destinationPath = public_path('images');
    $uploadedImage->move($destinationPath, $imgName);
    $image->image = $imgName;
    $image->link=$request['link'];
    $image->save();
    return redirect('productview');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $data = Product::find($id);
        if(!is_null($data)){
        $data->delete();
        }
        return redirect('productview');
    }
}

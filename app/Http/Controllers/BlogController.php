<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    $image = new Blog();
    $uploadedImage = $request->file('image');
    $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
    $destinationPath = public_path('images');
    $uploadedImage->move($destinationPath, $imgName);
    $image->image = $imgName;
    $image->status=$request['status'];
    $image->title=$request['title'];
    $image->description=$request['description'];
    $image->save();
    return redirect('blogindex');
}
    /**
     * Display the specified resource.
     */
    public function index()
    {
        $data = Blog::all();
        return view('blog.index', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Blog::find($id);
        if(is_null($data)){
        return redirect('blogindex');
        }
        else{
            return view('blog.edit', compact('data'));
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $image = Blog::find($id);
    $uploadedImage = $request->file('image');
    $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
    $destinationPath = public_path('images');
    $uploadedImage->move($destinationPath, $imgName);
    $image->image = $imgName;
    $image->status=$request['status'];
    $image->title=$request['title'];
    $image->description=$request['description'];
    $image->save();
    return redirect('blogindex');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $data = Blog::find($id);
        if(!is_null($data)){
        $data->delete();
        }
        return redirect('blogindex');
    }
    public function view($id)
    {
        $data = Blog::find($id);
        return view('blog.view', compact('data'));
    }
}

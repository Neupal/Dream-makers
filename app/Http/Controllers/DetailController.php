<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function create()
    {
        return view('detail.create');
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    ]);
    $image = new Detail();
    $uploadedImage = $request->file('image');
    $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
    $destinationPath = public_path('images');
    $uploadedImage->move($destinationPath, $imgName);
    $image->image = $imgName;

    $image->name=$request['name'];
    $image->about=$request['about'];
    $image->position=$request['position'];
    $image->save();
    return redirect('detailview');
}
    /**
     * Display the specified resource.
     */
    public function view()
    {
        $data = Detail::all();
        return view('detail.index', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Detail::find($id);
        if(is_null($data)){
        return redirect('detailview');
        }
        else{
            return view('detail.edit', compact('data'));
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $image = Detail::find($id);
    $uploadedImage = $request->file('image');
    $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
    $destinationPath = public_path('images');
    $uploadedImage->move($destinationPath, $imgName);
    $image->image = $imgName;
    $image->name=$request['name'];
    $image->about=$request['about'];
    $image->position=$request['position'];
    $image->save();
    return redirect('detailview');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $data = Detail::find($id);
        if(!is_null($data)){
        $data->delete();
        }
        return redirect('detailview');
    }
}

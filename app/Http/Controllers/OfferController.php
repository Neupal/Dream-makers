<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Offer;

class OfferController extends Controller
{
    public function create()
    {
        return view('offer.create');
    }

    public function store(Request $request)
{
    // $data = $request->validate([
    //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    // ]);
    $image = new Offer();
    $uploadedImage = $request->file('image');
    $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
    $destinationPath = public_path('images');
    $uploadedImage->move($destinationPath, $imgName);
    $image->image = $imgName;

    $image->title=$request['title'];
    $image->description=$request['description'];
    $image->subtitle=$request['subtitle'];
    $image->detail=$request['detail'];
    $image->heading=$request['heading'];
    $image->subheading=$request['subheading'];
    $image->save();
    return redirect('offerview');
}
    /**
     * Display the specified resource.
     */
    public function view()
    {
        $data = Offer::all();
        return view('offer.index', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Offer::find($id);
        if(is_null($data)){
        return redirect('detailview');
        }
        else{
            return view('offer.edit', compact('data'));
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $image = Offer::find($id);
    $uploadedImage = $request->file('image');
    $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
    $destinationPath = public_path('images');
    $uploadedImage->move($destinationPath, $imgName);
    $image->image = $imgName;

    $image->title=$request['title'];
    $image->description=$request['description'];
    $image->subtitle=$request['subtitle'];
    $image->detail=$request['detail'];
    $image->heading=$request['heading'];
    $image->subheading=$request['subheading'];
    $image->save();
    return redirect('offerview');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $data = Offer::find($id);
        if(!is_null($data)){
        $data->delete();
        }
        return redirect('offerview');
    }
}

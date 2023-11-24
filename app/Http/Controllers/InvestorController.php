<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Investor;

class InvestorController extends Controller
{
    public function create()
    {
        return view('investor.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    $image = new Investor();
    $uploadedImage = $request->file('image');
    $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
    $destinationPath = public_path('images');
    $uploadedImage->move($destinationPath, $imgName);
    $image->image = $imgName;

    $image->name=$request['name'];
    $image->position=$request['position'];
    $image->save();
    return redirect('investorview');
}
    /**
     * Display the specified resource.
     */
    public function view()
    {
        $data = Investor::all();
        return view('investor.index', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Investor::find($id);
        if(is_null($data)){
        return redirect('investorview');
        }
        else{
            return view('investor.edit', compact('data'));
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $image = Investor::find($id);
    $uploadedImage = $request->file('image');
    $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
    $destinationPath = public_path('images');
    $uploadedImage->move($destinationPath, $imgName);
    $image->image = $imgName;
    $image->name=$request['name'];
    $image->position=$request['position'];
    $image->save();
    return redirect('investorview');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $data = Investor::find($id);
        if(!is_null($data)){
        $data->delete();
        }
        return redirect('investorview');
    }
}

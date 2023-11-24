<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Address;

class AddressController extends Controller
{
    public function create()
    {
        return view('address.create');
    }

    public function store(Request $request)
    {
    $image = new Address();
    $image->icon=$request['icon'];
    $image->address=$request['address'];
    $image->save();
    return redirect('addressview');
}
    /**
     * Display the specified resource.
     */
    public function view()
    {
        $data = Address::all();
        return view('address.index', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Address::find($id);
        if(is_null($data)){
        return redirect('addressview');
        }
        else{
            return view('address.edit', compact('data'));
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $image = Address::find($id);
    $image->icon=$request['icon'];
    $image->address=$request['address'];
    $image->save();
    return redirect('addressindex');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $data = Address::find($id);
        if(!is_null($data)){
        $data->delete();
        }
        return redirect('addressindex');
    }
}

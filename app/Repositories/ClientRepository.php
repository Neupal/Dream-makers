<?php
namespace App\Repositories;
use App\Repositories\Interfaces\ClientRepositoryInterface;
use App\Models\Client;

class ClientRepository implements ClientRepositoryInterface{
    public function index()
    {
        return Client::all();
    }

    public function store($data){
        Client::create($data);
    }

    public function find($id){
        return Client::find($id);
    }

    public function update($data, $id){
        // $image = $this->find($id);
        // $image->name = $data['name'];
        // $image->position = $data['position'];
        // $image->status = $data['status'];
        // $uploadedImage = $data->file('image');
        // $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        // $destinationPath = public_path('images');
        // $uploadedImage->move($destinationPath, $imgName);
        // $image->image = $imgName;
        // $image->save();
    }

    public function delete($id){
        $data = $this->find($id);
        $data->delete();
    }

    public function view($id){
        return Client::find($id);
    }
}
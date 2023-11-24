<?php
namespace App\Repositories;
use App\Repositories\Interfaces\ServiceRepositoryInterface;
use App\Models\Service;

class ServiceRepository implements ServiceRepositoryInterface{
    public function index()
    {
        return Service::all();
    }

    public function store($data){
        Service::create($data);
    }

    public function find($id){
        return Service::find($id);
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
        return Service::find($id);
    }
}
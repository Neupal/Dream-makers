<?php
namespace App\Repositories;
use App\Repositories\Interfaces\LeadershipRepositoryInterface;
use App\Models\Leadership;

class LeadershipRepository implements LeadershipRepositoryInterface{
    public function index()
    {
        return Leadership::all();
    }

    public function store($data){
        Leadership::create($data);
    }

    public function find($id){
        return Leadership::find($id);
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
        return Leadership::find($id);
    }
}
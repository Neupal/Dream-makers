<?php
namespace App\Repositories;
use App\Repositories\Interfaces\ExpertRepositoryInterface;
use App\Models\Expert;

class ExpertRepository implements ExpertRepositoryInterface{
    public function index()
    {
        return Expert::all();
    }

    public function store($data){
        Expert::create($data);
    }

    public function find($id){
        return Expert::find($id);
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
        return Expert::find($id);
    }
}
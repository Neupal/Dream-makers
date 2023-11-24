<?php
namespace App\Repositories;
use App\Repositories\Interfaces\StandardRepositoryInterface;
use App\Models\Standard;

class StandardRepository implements StandardRepositoryInterface{
    public function index()
    {
        // $query = Standard::query();
        // return $query->paginate(4);
        return Standard::all();
    }

    public function store($data){
        Standard::create($data);
    }

    public function find($id){
        return Standard::find($id);
    }

    public function update($data, $id){
        $standard = $this->find($id);
        $standard->icon = $data['icon'];
        $standard->topic = $data['topic'];
        $standard->details = $data['details'];
        $standard->status = $data['status'];
        $standard->save();
    }

    public function delete($id){
        $data = $this->find($id);
        $data->delete();
    }

    public function view($id){
        return Standard::find($id);
    }
}
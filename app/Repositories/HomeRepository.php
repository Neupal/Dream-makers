<?php
namespace App\Repositories;
use App\Repositories\Interfaces\HomeRepositoryInterface;
use App\Models\Home;

class HomeRepository implements HomeRepositoryInterface{
    public function index()
    {
        return Home::all();
    }

    public function store($data){
        Home::create($data);
    }

    public function find($id){
        return Home::find($id);
    }

    public function update($data, $id){
        $home = $this->find($id);
        $home->icon = $data['icon'];
        $home->topic = $data['topic'];
        $home->details = $data['details'];
        $home->status = $data['status'];
        $home->save();
    }

    public function delete($id){
        $data = $this->find($id);
        $data->delete();
    }

    public function view($id){
        return Home::find($id);
    }
}
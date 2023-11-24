<?php
namespace App\Repositories;
use App\Repositories\Interfaces\ReachRepositoryInterface;
use App\Models\Reach;

class ReachRepository implements ReachRepositoryInterface{
    public function index()
    {
        return Reach::all();
    }

    public function store($data){
        Reach::create($data);
    }

    public function find($id){
        return Reach::find($id);
    }

    public function update($data, $id){
        $reach = $this->find($id);
        $reach->icon = $data['icon'];
        $reach->topic = $data['topic'];
        $reach->details = $data['details'];
        $reach->status = $data['status'];
        $reach->save();
    }

    public function delete($id){
        $data = $this->find($id);
        $data->delete();
    }

    public function view($id){
        return Reach::find($id);
    }
}
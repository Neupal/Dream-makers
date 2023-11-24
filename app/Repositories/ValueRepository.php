<?php
namespace App\Repositories;
use App\Repositories\Interfaces\ValueRepositoryInterface;
use App\Models\Value;

class ValueRepository implements ValueRepositoryInterface{
    public function index()
    {
        return Value::all();
    }

    public function store($data){
        Value::create($data);
    }

    public function find($id){
        return Value::find($id);
    }

    public function update($data, $id){
        $value = $this->find($id);
        $value->title = $data['title'];
        $value->date = $data['date'];
        $value->description = $data['description'];
        $value->status = $data['status'];
        $value->save();
    }

    public function delete($id){
        $data = $this->find($id);
        $data->delete();
    }

    public function view($id){
        return Value::find($id);
    }
}
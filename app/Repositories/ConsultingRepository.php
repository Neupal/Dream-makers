<?php
namespace App\Repositories;
use App\Repositories\Interfaces\ConsultingRepositoryInterface;
use App\Models\Consulting;

class ConsultingRepository implements ConsultingRepositoryInterface{
    public function index()
    {
        return Consulting::all();
    }

    public function store($data){
        Consulting::create($data);
    }

    public function find($id){
        return Consulting::find($id);
    }

    public function update($data, $id){
    }

    public function delete($id){
        $data = $this->find($id);
        $data->delete();
    }

    public function view($id){
        return Consulting::find($id);
    }
}
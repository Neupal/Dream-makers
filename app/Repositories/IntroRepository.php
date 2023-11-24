<?php
namespace App\Repositories;
use App\Repositories\Interfaces\IntroRepositoryInterface;
use App\Models\Intro;

class IntroRepository implements IntroRepositoryInterface{
    public function index()
    {
        return Intro::all();
    }

    public function store($data){
        Intro::create($data);
    }

    public function find($id){
        return Intro::find($id);
    }

    public function update($data, $id){
    }

    public function delete($id){
        $data = $this->find($id);
        $data->delete();
    }

    public function view($id){
        return Intro::find($id);
    }
}
<?php
namespace App\Repositories;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use App\Models\Question;

class QuestionRepository implements QuestionRepositoryInterface{
    public function index()
    {
        return Question::all();
    }

    public function store($data){
        Question::create($data);
    }

    public function find($id){
        return Question::find($id);
    }

    public function update($data, $id){
        $question = $this->find($id);
        $question->question = $data['question'];
        $question->answer = $data['answer'];
        $question->status = $data['status'];
        $question->save();
    }

    public function delete($id){
        $data = $this->find($id);
        $data->delete();
    }

    public function view($id){
        return Question::find($id);
    }
}
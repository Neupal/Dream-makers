<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
class QuestionController extends Controller
{
    private $questionRepository;
    public function __construct(QuestionRepositoryInterface $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

    public function create()
    {
        return view('question.create');
    }

    public function store(Request $request)
    {
        $data = [
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
            'status' => $request->input('status'),
        ];
        $this->questionRepository->store($data);
        return redirect('questionindex');
    }

    public function index(Request $request)
    {
        $info = $this->questionRepository->index();
        return view('question.index', compact('info'));
    }

    public function delete($id)
    {
        $this->questionRepository->delete($id);
        return redirect('questionindex');
    }

    public function edit($id)
    {
        $data = $this->questionRepository->find($id);
        return view('question.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->questionRepository->update($request->all(), $id);
        return redirect('questionindex');
    }

    public function view($id)
    {
        $data = $this->questionRepository->view($id);
        return view('question.view', compact('data'));
    }
}

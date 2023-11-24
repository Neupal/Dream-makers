<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ValueRepositoryInterface;
use App\Models\Value;

class ValueController extends Controller
{

    private $valueRepository;
    public function __construct(ValueRepositoryInterface $valueRepository)
    {
        $this->valueRepository = $valueRepository;
    }

    public function create()
    {
        return view('value.create');
    }

    public function store(Request $request)
    {
        $data = [
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ];

        $this->valueRepository->store($data);
        return redirect('valueindex');
    }

    public function index(Request $request)
    {
        $info = $this->valueRepository->index();
        return view('value.index', compact('info'));
    }

    public function delete($id)
    {
        $this->valueRepository->delete($id);
        return redirect('valueindex');
    }

    public function edit($id)
    {
        $data = $this->valueRepository->find($id);
        return view('value.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->valueRepository->update($request->all(), $id);
        return redirect('valueindex');
    }

    public function view($id)
    {
        $data = $this->valueRepository->view($id);
        return view('value.view', compact('data'));
    }
}

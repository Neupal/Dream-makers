<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\StandardRepositoryInterface;

class StandardController extends Controller
{
    private $standardRepository;
    public function __construct(StandardRepositoryInterface $standardRepository)
    {
        $this->standardRepository = $standardRepository;
    }

    public function create()
    {
        return view('standard.create');
    }

    public function store(Request $request)
    {
        $data = [
            'icon' => $request->input('icon'),
            'topic' => $request->input('topic'),
            'details' => $request->input('details'),
            'status' => $request->input('status'),
        ];

        $this->standardRepository->store($data);

        return redirect('standardindex')->withSuccess('Created');
    }
    
    public function index(Request $request)
    {
        $info = $this->standardRepository->index();
        return view('standard.index', compact('info'));
    }

    public function delete($id)
    {
        $this->standardRepository->delete($id);
        return redirect('standardindex');
    }

    public function edit($id)
    {
        $data = $this->standardRepository->find($id);
        return view('standard.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->standardRepository->update($request->all(), $id);
        return redirect('standardindex');
    }
    public function view($id)
    {
        $data = $this->standardRepository->view($id);
        return view('standard.view', compact('data'));
    }
}

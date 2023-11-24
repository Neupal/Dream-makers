<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ReachRepositoryInterface;
class ReachController extends Controller
{

    private $reachRepository;
    public function __construct(ReachRepositoryInterface $reachRepository)
    {
        $this->reachRepository = $reachRepository;
    }

    public function create()
    {
        return view('reach.create');
    }

    public function store(Request $request)
    {
        $data = [
            'icon' => $request->input('icon'),
            'topic' => $request->input('topic'),
            'details' => $request->input('details'),
            'status' => $request->input('status'),
        ];

        $this->reachRepository->store($data);
        return redirect('reachindex');
    }

    public function index(Request $request)
    {
        $info = $this->reachRepository->index();
        return view('reach.index', compact('info'));
    }

    public function delete($id)
    {
        $this->reachRepository->delete($id);
        return redirect('reachindex');
    }

    public function edit($id)
    {
        $data = $this->reachRepository->find($id);
        return view('reach.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->reachRepository->update($request->all(), $id);
        return redirect('reachindex');
    }
    public function view($id)
    {
        $data = $this->reachRepository->view($id);
        return view('reach.view', compact('data'));
    }
}
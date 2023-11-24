<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\HomeRepositoryInterface;

class HomeController extends Controller
{
    private $homeRepository;
    public function __construct(HomeRepositoryInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    public function create()
    {
        return view('home.create');
    }

    public function store(Request $request)
    {
        $data = [
            'icon' => $request->input('icon'),
            'topic' => $request->input('topic'),
            'details' => $request->input('details'),
            'status' => $request->input('status'),
        ];
        $this->homeRepository->store($data);
        return redirect('homeindex');
    }

    public function index(Request $request)
    {
        $info = $this->homeRepository->index();
        return view('home.index', compact('info'));
    }

    public function delete($id)
    {
        $this->homeRepository->delete($id);
        return redirect('homeindex');
    }

    public function edit($id)
    {
        $data = $this->homeRepository->find($id);
        return view('home.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->homeRepository->update($request->all(), $id);
        return redirect('homeindex');
    }

    public function view($id)
    {
        $data = $this->homeRepository->view($id);
        return view('home.view', compact('data'));
    }
}

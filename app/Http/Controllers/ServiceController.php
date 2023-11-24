<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ServiceRepositoryInterface;
use App\Models\Service;
class ServiceController extends Controller
{

    private $serviceRepository;
    public function __construct(ServiceRepositoryInterface $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }
    public function create()
    {
        return view('service.create');
    }

    public function store(Request $request)
    {
        $data = new Service();
        $uploadedImage = $request->file('image');
        $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $uploadedImage->move($destinationPath, $imgName);
        $data->image = $imgName;

        $data = [
            'image' => $imgName,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ];
        $this->serviceRepository->store($data);
        return redirect('serviceindex');
    }

    public function index(Request $request)
    {
        $info = $this->serviceRepository->index();
        return view('service.index', compact('info'));
    }

    public function delete($id)
    {
        $this->serviceRepository->delete($id);
        return redirect('serviceindex');
    }

    public function edit($id)
    {
        $data = $this->serviceRepository->find($id);
        return view('service.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $image = Service::find($id);
        $uploadedImage = $request->file('image');
        $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $uploadedImage->move($destinationPath, $imgName);
        $image->image = $imgName;
        $image->title = $request['title'];
        $image->description = $request['description'];
        $image->status = $request['status'];
        $image->save();
        return redirect('serviceindex');
    }

    public function view($id)
    {
        $data = $this->serviceRepository->view($id);
        return view('service.view', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ConsultingRepositoryInterface;
use App\Models\Consulting;
class ConsultingController extends Controller
{
    private $consultingRepository;
    public function __construct(ConsultingRepositoryInterface $consultingRepository)
    {
        $this->consultingRepository = $consultingRepository;
    }

    public function create()
    {
        return view('consulting.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $image = new Consulting();
        $uploadedImage = $request->file('image');
        $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $uploadedImage->move($destinationPath, $imgName);
        $image->image = $imgName;
        $data = [
            'image' => $imgName,
            'project' => $request->input('project'),
            'buyer' => $request->input('buyer'),
            'location' => $request->input('location'),
            'date' => $request->input('date'),
            'status' => $request->input('status'),
        ];
        $this->consultingRepository->store($data);
        return redirect('consultingindex');
    }

    public function index()
    {
        $data = $this->consultingRepository->index();
        return view('consulting.index', compact('data'));
    }

    public function edit(string $id)
    {
        $data = $this->consultingRepository->find($id);
        return view('consulting.edit', compact('data'));
    }

    public function update(Request $request, string $id)
    {
        $image = Consulting::find($id);
        $uploadedImage = $request->file('image');
        $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $uploadedImage->move($destinationPath, $imgName);
        $image->image = $imgName;
        $image->project = $request['project'];
        $image->buyer = $request['buyer'];
        $image->location = $request['location'];
        $image->date = $request['date'];
        $image->status = $request['status'];
        $image->save();
        return redirect('consultingindex');
    }
    
    public function delete(string $id)
    {
        $this->consultingRepository->delete($id);
        return redirect('consultingindex');
    }
    public function view($id)
    {
        $data = $this->consultingRepository->view($id);
        return view('consulting.view', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ExpertRepositoryInterface;
use App\Models\Expert;
class ExpertController extends Controller
{
    private $expertRepository;
    public function __construct(ExpertRepositoryInterface $expertRepository)
    {
        $this->expertRepository = $expertRepository;
    }

    public function create()
    {
        return view('expert.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $image = new Expert();
        $uploadedImage = $request->file('image');
        $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $uploadedImage->move($destinationPath, $imgName);
        $image->image = $imgName;
        $data = [
            'image' => $imgName,
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'experience' => $request->input('experience'),
            'status' => $request->input('status'),
        ];

        $this->expertRepository->store($data);
        return redirect('expertindex');
    }
    /**
     * Display the specified resource.
     */
    public function index()
    {
        $data = $this->expertRepository->index();
        return view('expert.index', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->expertRepository->find($id);
        return view('expert.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image = Expert::find($id);
        $uploadedImage = $request->file('image');
        $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $uploadedImage->move($destinationPath, $imgName);
        $image->image = $imgName;
        $image->name = $request['name'];
        $image->position = $request['position'];
        $image->experience = $request['experience'];
        $image->status = $request['status'];
        $image->save();
        return redirect('expertindex');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $this->expertRepository->delete($id);
        return redirect('expertindex');
    }

    public function view(string $id)
    {
        $data = $this->expertRepository->view($id);
        return view('expert.view', compact('data'));
    }
}
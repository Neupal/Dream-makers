<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\LeadershipRepositoryInterface;
use App\Models\Leadership;
class LeadershipController extends Controller
{
    private $leadershipRepository;
    public function __construct(LeadershipRepositoryInterface $leadershipRepository)
    {
        $this->leadershipRepository = $leadershipRepository;
    }

    public function create()
    {
        return view('leadership.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $image = new Leadership();
        $uploadedImage = $request->file('image');
        $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $uploadedImage->move($destinationPath, $imgName);
        $image->image = $imgName;
        $data = [
            'image' => $imgName,
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'email' => $request->input('email'),
            'experience' => $request->input('experience'),
            'status' => $request->input('status'),
        ];

        $this->leadershipRepository->store($data);
        return redirect('leadershipindex');
    }
    /**
     * Display the specified resource.
     */
    public function index()
    {
        $data = $this->leadershipRepository->index();
        return view('leadership.index', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->leadershipRepository->find($id);
        return view('leadership.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image = Leadership::find($id);
        $uploadedImage = $request->file('image');
        $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $uploadedImage->move($destinationPath, $imgName);
        $image->image = $imgName;
        $image->name = $request['name'];
        $image->position = $request['position'];
        $image->email = $request['email'];
        $image->experience = $request['experience'];
        $image->status = $request['status'];
        $image->save();
        return redirect('leadershipindex');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $this->leadershipRepository->delete($id);
        return redirect('leadershipindex');
    }

    public function view(string $id)
    {
        $data = $this->leadershipRepository->view($id);
        return view('leadership.view', compact('data'));
    }
}
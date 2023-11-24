<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\IntroRepositoryInterface;
use App\Models\Intro;

class IntroController extends Controller
{
    private $introRepository;
    public function __construct(IntroRepositoryInterface $introRepository)
    {
        $this->introRepository = $introRepository;
    }

    public function create()
    {
        return view('intro.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $image = new Intro();
        $uploadedImage = $request->file('image');
        $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $uploadedImage->move($destinationPath, $imgName);
        $image->image = $imgName;
        // $image->title = $request['title'];
        // $image->description = $request['description'];
        // $image->status = $request['status'];
        // $image->save();

        $data = [
            'image' => $imgName,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ];
        $this->introRepository->store($data);
        return redirect('introindex');
    }
    /**
     * Display the specified resource.
     */
    public function index()
    {
        // $data = Intro::all();
        $data = $this->introRepository->index();
        return view('intro.index', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $data = Intro::find($id);
        // if (is_null($data)) {
        //     return redirect('introview');
        // } else {
        $data = $this->introRepository->find($id);
        return view('intro.edit', compact('data'));
        // }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image = Intro::find($id);
        $uploadedImage = $request->file('image');
        $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $uploadedImage->move($destinationPath, $imgName);
        $image->image = $imgName;
        $image->title = $request['title'];
        $image->description = $request['description'];
        $image->status = $request['status'];
        $image->save();
        return redirect('introindex');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        // $data = Intro::find($id);
        // if (!is_null($data)) {
        //     $data->delete();
        // }
        $this->introRepository->delete($id);
        return redirect('introindex');
    }

    public function view($id)
    {
        // $data = Intro::find($id);
        // if (is_null($data)) {
        //     return redirect('/introcreate');
        // } else {
        $data = $this->introRepository->view($id);
        return view('intro.view', compact('data'));
        // }
    }
}

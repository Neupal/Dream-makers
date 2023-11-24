<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ClientRepositoryInterface;
use App\Models\Client;
class ClientController extends Controller
{
    private $clientRepository;
    public function __construct(ClientRepositoryInterface $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $image = new Client();
        $uploadedImage = $request->file('image');
        $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $uploadedImage->move($destinationPath, $imgName);
        $image->image = $imgName;

        $data = [
            'image' => $imgName,
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'comment' => $request->input('comment'),
            'status' => $request->input('status'),
        ];
        $this->clientRepository->store($data);
        return redirect('clientindex');
    }
    /**
     * Display the specified resource.
     */
    public function index()
    {
        $data = $this->clientRepository->index();
        return view('client.index', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->clientRepository->find($id);
        return view('client.edit', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image = Client::find($id);
        $uploadedImage = $request->file('image');
        $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $uploadedImage->move($destinationPath, $imgName);
        $image->image = $imgName;
        $image->name = $request['name'];
        $image->comment = $request['comment'];
        $image->status = $request['status'];
        $image->save();
        return redirect('clientindex');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $this->clientRepository->delete($id);
        return redirect('clientindex');
    }

    public function view(string $id)
    {
        $data = $this->clientRepository->view($id);
        return view('client.view', compact('data'));
    }
}
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Image;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('image.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'title' => 'required|string',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    //         'description' => 'required',
    //         'link' => 'required',
    //     ]);
    //     $image=new Image();
    //     $image->title=$request['title'];
    //     $destination_path = 'public/images';
    //     $image = $request->file('image');
    //     $img = $image->getClientOriginalName();
    //     $path = $request->file('image')->storeAs($destination_path, $img);
    //     $image->image = $img;
    //     $image->link=$request['link'];
    //     $image->description=$request['description'];
    //     $image->save();
    //     return redirect('image/show');
    // }
    public function store(Request $request)
{
    $data = $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    ]);
 
    $image = new Image();
    $uploadedImage = $request->file('image');
    $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
    $destinationPath = public_path('images');
    $uploadedImage->move($destinationPath, $imgName);
    $image->image = $imgName;
    dd($image->all());
    $image->save();
    return redirect('imageshow');
}
    /**
     * Display the specified resource.
     */
    public function show()
    {
         $data = Image::all();
         dd($data->all());
        return view('image.index', compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Image::find($id);
        if(is_null($data)){
        return redirect('imageshow');
        }
        else{
            return view('image.edit', compact('data'));
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $image = Image::find($id);
    $uploadedImage = $request->file('image');
    $imgName = time() . '.' . $uploadedImage->getClientOriginalExtension();
    $destinationPath = public_path('images');
    $uploadedImage->move($destinationPath, $imgName);
    $image->image = $imgName;
    $image->save();
    return redirect('imageshow');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $data = Image::find($id);
        if(!is_null($data)){
        $data->delete();
        }
        return redirect('imageshow');
    }
}
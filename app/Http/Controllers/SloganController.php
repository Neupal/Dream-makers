<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Slogan;

class SloganController extends Controller
{
    public function create()
    {
        return view('slogan.create');
    }

    public function store(Request $request)
    {
        $slogan = new Slogan();
        $slogan->title = $request['title'];
        $slogan->heading = $request['heading'];
        $slogan->information = $request['information'];

        $slogan->save();

        return redirect('sloganview');
    }
    
    public function view(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search!="")
        {

            $info=Slogan::where('title', "LIKE", "%$search%")->orWhere('description', "LIKE", "%$search%")->get();
        }
        else{
        $info = Slogan::all();
        }
        return view('slogan.index',compact('info', 'search'));
    }

    public function delete($id)
    {
        $data=Slogan::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }
        return redirect('sloganview');
    }
    
    public function edit($id)
    {
        $data=Slogan::find($id);
        if(is_null($data))
        {
            return redirect('scopecreate');
        }
        else
        {
            // $url=url('/custom/update') ."/".  ($id);
            // $ball=compact('data', 'url');
            return view('slogan.edit', compact('data'));
        }
    }

    public function update(Request $request, $id)
    {
        $data=Slogan::find($id);
        $data->title=$request['title'];
        $data->heading=$request['heading'];
        $data->information=$request['information'];
        $data->save();
        return redirect('/sloganview');
    }
}

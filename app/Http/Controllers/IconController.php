<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Icon;

class IconController extends Controller
{
    public function create()
    {
        return view('icon.create');
    }

    public function store(Request $request)
    {
        $icon = new Icon();
        $icon->topic = $request['topic'];
        $icon->details = $request['details'];
        $icon->save();

        return redirect('iconview');
    }
    
    public function view(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search!="")
        {

            $info=Icon::where('topic', "LIKE", "$search%")->orWhere('details', "LIKE", "%$search%")->get();
        }
        else{
        $info = Icon::all();
        }
        return view('icon.store',compact('info', 'search'));
    }

    public function delete($id)
    {
        $data=Icon::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }
        return redirect('iconview');
    }
    
    public function edit($id)
    {
        $data=Icon::find($id);
        if(is_null($data))
        {
            return redirect('/iconcreate');
        }
        else
        {
            return view('icon.update', compact('data'));
        }
    }

    public function update(Request $request, $id)
    {
        $data=Icon::find($id);
        $data->topic=$request['topic'];
        $data->details=$request['details'];
        $data->save();
        return redirect('iconview');
    }
}

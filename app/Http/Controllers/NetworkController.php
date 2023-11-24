<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Network;

class NetworkController extends Controller
{
    public function create()
    {
        return view('network.create');
    }

    public function store(Request $request)
    {
        $network = new Network();
        $network->title = $request['title'];
        $network->icon = $request['icon'];
        $network->number = $request['number'];
        $network->save();

        return redirect('networkview');
    }
    
    public function view(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search!="")
        {

            $info=Network::where('topic', "LIKE", "$search%")->orWhere('details', "LIKE", "%$search%")->get();
        }
        else{
        $info = Network::all();
        }
        return view('network.index',compact('info', 'search'));
    }

    public function delete($id)
    {
        $data=Network::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }
        return redirect('networkview');
    }
    
    public function edit($id)
    {
        $data=Network::find($id);
        if(is_null($data))
        {
            return redirect('/networkcreate');
        }
        else
        {
            return view('network.edit', compact('data'));
        }
    }

    public function update(Request $request, $id)
    {
        $data=Network::find($id);
        $data->title=$request['title'];
        $data->icon=$request['icon'];
        $data->number=$request['number'];
        $data->save();
        return redirect('networkview');
    }
}

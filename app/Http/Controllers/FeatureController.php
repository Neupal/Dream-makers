<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Feature;

class FeatureController extends Controller
{
    public function create()
    {
        return view('feature.create');
    }

    public function store(Request $request)
    {
        $home = new Feature();
        $home->icon = $request['icon'];
        $home->feature = $request['feature'];
        $home->save();

        return redirect('featureview');
    }
    
    public function view(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search!="")
        {

            $info=Feature::where('topic', "LIKE", "$search%")->orWhere('details', "LIKE", "%$search%")->get();
        }
        else{
        $info = Feature::all();
        }
        return view('feature.index',compact('info', 'search'));
    }

    public function delete($id)
    {
        $data=Feature::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }
        return redirect('featureview');
    }
    
    public function edit($id)
    {
        $data=Feature::find($id);
        if(is_null($data))
        {
            return redirect('/featurecreate');
        }
        else
        {
            return view('feature.edit', compact('data'));
        }
    }

    public function update(Request $request, $id)
    {
        $data=Feature::find($id);
        $data->icon=$request['icon'];
        $data->feature=$request['feature'];
        $data->save();
        return redirect('featureview');
    }
}

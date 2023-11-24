<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Goal;

class GoalController extends Controller
{
    public function create()
    {
        return view('goal.create');
    }

    public function store(Request $request)
    {
        $home = new Goal();
        $home->icon = $request['icon'];
        $home->topic = $request['topic'];
        $home->details = $request['details'];
        $home->save();

        return redirect('goalview');
    }
    
    public function view(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search!="")
        {

            $info=Goal::where('topic', "LIKE", "$search%")->orWhere('details', "LIKE", "%$search%")->get();
        }
        else{
        $info = Goal::all();
        }
        return view('goal.index',compact('info', 'search'));
    }

    public function delete($id)
    {
        $data=Goal::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }
        return redirect('goalview');
    }
    
    public function edit($id)
    {
        $data=Goal::find($id);
        if(is_null($data))
        {
            return redirect('/goalcreate');
        }
        else
        {
            return view('goal.edit', compact('data'));
        }
    }

    public function update(Request $request, $id)
    {
        $data=Goal::find($id);
        $data->icon=$request['icon'];
        $data->topic=$request['topic'];
        $data->details=$request['details'];
        $data->save();
        return redirect('goalview');
    }
}

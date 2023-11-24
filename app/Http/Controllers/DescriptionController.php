<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Description;

class DescriptionController extends Controller
{
    public function create()
    {
        // $title='Who we are';
        // $description="Venture four technology";
        // $data=compact('title', 'description');
        // $detail= Description::create($data);
        return view('database');
    }

    public function kept(Request $request)
    {
        $database = new Description();
        $database->title = $request['title'];
        $database->description = $request['description'];
        $database->status = $request['status'];
        $database->save();

        return redirect('/database/view');
    }
    
    public function view(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search!="")
        {

            $info=Description::where('title', "LIKE", "%$search%")->orWhere('description', "LIKE", "%$search%")->get();
        }
        else{
        $info = Description::all();
        }
        // echo"<pre>";
        // print_r($customers->toArray());
        return view('database-view',compact('info', 'search'));
    }

    public function delete($id)
    {
        $data=Description::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }
        return redirect('/database/view');
    }
    
    public function edit($id)
    {
        $data=Description::find($id);
        if(is_null($data))
        {
            return redirect('/database');
        }
        else
        {
            // $url=url('/custom/update') ."/".  ($id);
            // $ball=compact('data', 'url');
            return view('update', compact('data'));
        }
    }

    public function update(Request $request, $id)
    {
        $data=Description::find($id);
        $data->title=$request['title'];
        $data->description=$request['description'];
        $data->status->$request['status'];
        $data->save();
        return redirect('/database/view');
    }
}

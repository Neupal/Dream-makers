<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Scope;

class ScopeController extends Controller
{
    public function create()
    {
        return view('scope.create');
    }

    public function store(Request $request)
    {
        $scope = new Scope();
        $scope->title = $request['title'];
        $scope->description = $request['description'];

        $scope->save();

        return redirect('scopeview');
    }
    
    public function view(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search!="")
        {

            $info=Scope::where('title', "LIKE", "%$search%")->orWhere('description', "LIKE", "%$search%")->get();
        }
        else{
        $info = Scope::all();
        }
        return view('scope.index',compact('info', 'search'));
    }

    public function delete($id)
    {
        $data=Scope::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }
        return redirect('scopeview');
    }
    
    public function edit($id)
    {
        $data=Scope::find($id);
        if(is_null($data))
        {
            return redirect('scopecreate');
        }
        else
        {
            // $url=url('/custom/update') ."/".  ($id);
            // $ball=compact('data', 'url');
            return view('scope.edit', compact('data'));
        }
    }

    public function update(Request $request, $id)
    {
        $data=Scope::find($id);
        $data->title=$request['title'];
        $data->description=$request['description'];
        $data->save();
        return redirect('scopeview');
    }
}

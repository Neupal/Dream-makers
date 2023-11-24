<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Vacancy;

class VacancyController extends Controller
{
    public function create()
    {
        return view('vacancy.create');
    }

    public function store(Request $request)
    {
        $vacancy = new Vacancy();
        $vacancy->job = $request['job'];
        $vacancy->position = $request['position'];
        $vacancy->duration = $request['duration'];

        $vacancy->save();

        return redirect('vacancyview');
    }
    
    public function view(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search!="")
        {

            $info=Vacancy::where('title', "LIKE", "%$search%")->orWhere('description', "LIKE", "%$search%")->get();
        }
        else{
        $info = Vacancy::all();
        }
        return view('vacancy.index',compact('info', 'search'));
    }

    public function delete($id)
    {
        $data=Vacancy::find($id);
        if(!is_null($data))
        {
            $data->delete();
        }
        return redirect('vacancyview');
    }
    
    public function edit($id)
    {
        $data=Vacancy::find($id);
        if(is_null($data))
        {
            return redirect('vacancycreate');
        }
        else
        {
            // $url=url('/custom/update') ."/".  ($id);
            // $ball=compact('data', 'url');
            return view('vacancy.edit', compact('data'));
        }
    }

    public function update(Request $request, $id)
    {
        $data=Vacancy::find($id);
        $data->job=$request['job'];
        $data->position=$request['position'];
        $data->duration=$request['duration'];
        $data->save();
        return redirect('/vacancyview');
    }
}

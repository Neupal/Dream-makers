<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.sign-up');
    }

    public function store(Request $request)
    {
            $request->validate([
                'name' => 'required|string',
                'phone' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);

        $register = new Register();
        $register->name = $request['name'];
        $register->phone = $request['phone'];
        $register->email = $request['email'];
        $register->password = $request['password'];

        $register->save();

        return redirect('signup');
    }
    
    // public function view(Request $request)
    // {
    //     $search=$request['search'] ?? "";
    //     if($search!="")
    //     {

    //         $info=Vacancy::where('title', "LIKE", "%$search%")->orWhere('description', "LIKE", "%$search%")->get();
    //     }
    //     else{
    //     $info = Vacancy::all();
    //     }
    //     return view('vacancy.store',compact('info', 'search'));
    // }

    // public function delete($id)
    // {
    //     $data=Vacancy::find($id);
    //     if(!is_null($data))
    //     {
    //         $data->delete();
    //     }
    //     return redirect('vacancyview');
    // }
    
    // public function edit($id)
    // {
    //     $data=Vacancy::find($id);
    //     if(is_null($data))
    //     {
    //         return redirect('vacancycreate');
    //     }
    //     else
    //     {
    //         // $url=url('/custom/update') ."/".  ($id);
    //         // $ball=compact('data', 'url');
    //         return view('vacancy.update', compact('data'));
    //     }
    // }

    // public function update(Request $request, $id)
    // {
    //     $data=Vacancy::find($id);
    //     $data->job=$request['job'];
    //     $data->position=$request['position'];
    //     $data->duration=$request['duration'];
    //     $data->save();
    //     return redirect('/vacancyview');
    // }
    // public function validator(array $data)
    // {
    //     return validator::make($data, [
    //         'name'=>['resuired', 'string', 'max:40'],
    //         'phone'=>['resuired', 'string', 'max:10', 'min:10'],
    //         'email'=>['resuired', 'string', 'max:40'],
    //         'password'=>['resuired', 'string', 'max:40'],

    //     ]);
    // }
}

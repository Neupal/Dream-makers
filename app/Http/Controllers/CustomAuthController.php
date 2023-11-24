<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view('auth.signin');
    }

    public function register()
    {
        return view('auth.signup');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:auths',
            'password' => 'required|min:5|max:12',
        ]);

        $auth = new User();
        $auth->name = $request->name;
        $auth->email = $request->email;
        $auth->password = Hash::make($request->password);
        $res = $auth->save();

        if ($res) {
            return back()->with('success', 'You have registered successfully');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',

        ]);

        $auth = User::where('email', '=', $request->email)->first();
        if ($auth) {
            if (Hash::check($request->password, $auth->password)) {
                $request->session()->put('loginid', '$auth->id');
                return redirect('/panel');
            } else {
                return back()->with('fail', 'Password do not matched');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }
    }

    public function dashboard()
    {
        $auth = User::all();
        if (Session::has('loginid')) {
            $auth = User::where('id', '=', Session::get('loginid'))->first();
        }
        return view('light.table', compact('auth'));
    }

    public function logout()
    {
        if (Session::has('loginid')){
            Session::pull('loginid');
            return redirect('login');
        }
    }
}

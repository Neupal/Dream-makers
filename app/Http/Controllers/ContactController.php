<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function product()
    {
        return view('product');
    }

    public function blog()
    {
        return view('blogpage');
    }

    public function contact()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'title'=>'required',
            'description'=>'required',
        ]);

        $website = new Contact();
        $website->name = $request->name;
        $website->email = $request->email;
        $website->title = $request->title;
        $website->description = $request->description;
        $website->save();
        return redirect('/contact');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Description;
use App\Models\Home;
use App\Models\Icon;
use App\Models\Network;
use App\Models\Detail;

use App\Models\Image;
use App\Models\Slogan;
use App\Models\Scope;
use App\Models\Vacancy;
use App\Models\Product;
use App\Models\Feature;
use App\Models\Goal;
use App\Models\Investor;
use App\Models\Service;
use App\Models\Offer;
use App\Models\Consulting;
use App\Models\Standard;
use App\Models\Reach;
use App\Models\Question;
use App\Models\Value;
use App\Models\Expert;
use App\Models\Leadership;
use App\Models\Client;
use App\Models\Blog;
use App\Models\Intro;
use App\Models\Address;

class DataController extends Controller
{
    public function index()
    {
        // $post=Description::first();
        $intro=Intro::where('status',1)->get();
        $home=Home::where('status',1)->get();
        $standard=Standard::where('status',1)->get();
        $reach=Reach::all();
        $question=Question::all();
        // $network=Network::all();
        // $service=Service::all();
        // $image=Image::all();
        // $detail=Detail::all();
        return view('index', compact('intro', 'standard','reach','question','home'));
    }

    public function about()
    {
        $value=Value::all();
        $expert=Expert::paginate(8);
        $leadership=Leadership::all();
        $client=Client::all();
        return view('about', compact('value', 'expert', 'leadership', 'client'));
    }

    public function service()
    {
        $service=Service::where('status',1)->get();
        $leadership=Leadership::all();
        $client=Client::all();
        $value=Value::all();
        return view('services', compact('service', 'leadership', 'client', 'value'));
    }

    public function product()
    {
        // $slogan=Slogan::all();
        // $scope=Scope::all();
        // $vacancy=Vacancy::all();
        $consulting=Consulting::all();
        return view('product', compact('consulting'));
    }

    public function contact()
    {
        $product=Product::all();
        $blog=Blog::all();
        return view('contact', compact('product', 'blog'));
    }

    public function footer()
    {
        $address=Address::all();
        return view('layouts.footer', compact('address'));
    }
}

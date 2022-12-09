<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('welcome',compact('sliders'));
    }

    public function about()
    {
        $about = Setting::where('type','=','about')->first();
        
        return view('website.about', compact('about'));
    }

    public function currency()
    {
        return view('website.currency');
    }
    
    public function education()
    {
        return view('website.education');
    }

    public function playlist()
    {
        return view('website.playlist');
    }

    public function news()
    {
        return view('website.news');
    }

    public function calender()
    {
        return view('website.calender');
    }

    public function accounts()
    {
        return view('website.accounts');
    }
    
    public function forex()
    {
        return view('website.forex');
    }

    public function maintainnce()
    {
        return view('website.maintainnce');
    }
}

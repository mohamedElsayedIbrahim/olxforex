<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('website.about');
    }

    public function currency()
    {
        return view('website.currency');
    }
    
    public function education()
    {
        return view('website.education');
    }
}

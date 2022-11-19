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
}

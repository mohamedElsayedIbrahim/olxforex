<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artical;

class ArticalController extends Controller
{
    public function index()
    {
        $articals = Artical::paginate(12);
        return view('website.artical',compact('articals'));
    }

    public function show($id)
    {
        $id = str_replace('-',' ',$id);
        $artical = Artical::where('title','=',$id)->firstorfail();
        return view('website.post',compact('artical'));
    }
}

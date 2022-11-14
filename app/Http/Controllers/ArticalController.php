<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artical;

class ArticalController extends Controller
{
    public function index()
    {
        $articals = Artical::paginate(12);
        
    }
}

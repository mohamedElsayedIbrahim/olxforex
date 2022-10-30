<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('website.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'inputName'=>'required|string|max:100|min:3',
            'inputEmail'=>'required|email:rfc,dns',
            'inputSubject'=>'required|min:3|max:100|string',
            'inputMassage'=>'required|min:3|max:1000|string',
        ]);

        Contact::create([
            'fullName'=>$request->inputName,
            'mail'=> $request->inputEmail,
            'subject'=>$request->inputSubject,
            'message'=>$request->inputMassage
        ]);

        return redirect(route('contact'))->with('message','Your Request is submmiting Successfully');
    }
}

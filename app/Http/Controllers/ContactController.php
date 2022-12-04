<?php

namespace App\Http\Controllers;

use App\Mail\ContacMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $contact = Contact::create([
            'fullName'=>$request->inputName,
            'mail'=> $request->inputEmail,
            'subject'=>$request->inputSubject,
            'message'=>$request->inputMassage
        ]);

        Mail::to('mohamdeesayed@outlook.com')
        ->send(new ContacMail($contact));

        return redirect(route('contact'))->with('message','Your Request is submmiting Successfully');
    }
}

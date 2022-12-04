<?php

namespace App\Http\Controllers;

use App\Mail\DepositerMail;
use App\Models\Depoister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DepoisterController extends Controller
{
    public function index()
    {
        return view('website.corporate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customerName'=>'required|string|min:3|max:50',
            'customerAccountNumber'=>'required|string|min:16|max:16',
            'customerPhoneNumber'=>'required|string|min:7|max:11',
            'customerAmount'=>'required|integer',
            'customerServiceType'=>'required|string',
        ]);

        $data  = Depoister::create([
            'fullName'=>$request->customerName,
            'account'=>$request->customerAccountNumber,
            'phone'=>$request->customerPhoneNumber,
            'amount'=>$request->customerAmount,
            'type'=>$request->customerServiceType,
        ]);

        Mail::to('info@olxforex.com')->send(new DepositerMail($data));

        return redirect(route('corporate'))->with('message','Your request has been set successfully, We will keeping in touch with you soon');
    }
}

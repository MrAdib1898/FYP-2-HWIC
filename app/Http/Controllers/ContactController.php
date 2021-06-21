<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyApps; 
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function show()
    {
        return view('/fyp/myappointment');
    }

    public function store()
    {
        Mail::to(Auth::user()->email)->send(new MyApps());
        
        return redirect('/secondmain')->with('message','Email sent');

        
    }
}

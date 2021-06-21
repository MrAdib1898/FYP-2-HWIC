<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Announcement;

class ApptController extends Controller
{

    function appMessage()
    {
        $appt = Appointment::all();
        return view('/fyp/abtus', ['appt'=>$appt]);
    }
    
    function announce()
    {
        $ann = Announcement::all();
        return view('/fyp/announcement' , ['ann'=>$ann]);
    }
}

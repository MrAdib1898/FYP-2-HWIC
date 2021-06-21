<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
class DoctorController extends Controller
{
    //
    function list(Request $req)
    {
        $data = Doctor::all();
        $searchTerm = $req->input('searchData');
        $doctor = Doctor::where('doc_type','LIKE','%'.$searchTerm.'%')->get();
    
        return view('fyp/appointment', compact('data', 'doctor'));
    }

    function formSubmit(Request $req)
    {
        if(isset($_POST["Submit1"]))
        {
                $appointment = new Appointment;
                $appointment->app_etime = $req->app_time;
                $appointment->app_stime = date('H:i:s', strtotime($req->app_time) + 60*60);
                $appointment->app_date = $req->app_date;
                $appointment->app_reason = $req->reason;
                $appointment->app_name = 'appointment';
                $appointment->app_id = rand(5,999);
                $appointment->app_status = rand(5,999);
                $appointment->app_user = Auth::user()->matric;
                $appointment->save();
                return view('fyp/secondmain');
        }
       
    }

   
    
}

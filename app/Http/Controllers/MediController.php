<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medic;

class MediController extends Controller
{
    //
    function mediList()
    {
        $drugs = Medic::all();
        return view('fyp/prescription', ['drugs' =>$drugs]);
    }
    
}

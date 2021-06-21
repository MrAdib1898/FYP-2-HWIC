<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\Medic;

class InfoController extends Controller
{
    function list()
    {
        $drugs = Medic::all();
        $infos = Info::all()
        ->groupBy('title');
            
        return view('fyp/prescription', compact('infos', 'drugs'));
    }
}

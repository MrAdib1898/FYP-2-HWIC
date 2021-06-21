<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class TestController extends Controller
{
    //
    public function create()
    {
        return view('/fyp/announcement/create');
    }

    public function store()
    {
        
        
        
        request()->validate([
            'firstname'=> 'required',
            'lastname' => 'required',
            
        ]);
        
        Announcement::create([
            'ann_name' =>request('firstname'),
            'ann_desc' => request('lastname'),
            'ann_id' => rand(5,999),
            'ann_date' => request('date'),
            'ann_time' => request('time'),
        ]);   
        return redirect('/announcement');
    }
    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScraperController extends Controller
{
    //
    private $results = array();

    public function scraper(){
        $client = new Client();
        $url = 'https://www.worldometers.info/coronavirus/country/malaysia/';
        $page = $client->request('GET', $url);

        $page->filter('.maincounter-number')->each(function($node){
            print $node->text();
        });
       
        return view('/fyp/scraper',compact('page'));
    }
}

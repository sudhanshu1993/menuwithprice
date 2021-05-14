<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Goutte\Client;
use Illuminate\Http\Request;

class nutrition extends Controller
{
    private $results = array();
    public function index()
    {
        $client = new Client();
       
     $url = 'https://www.menuwithprice.com/nutrition/';
        
        $page = $client->request('GET', $url);

      

        $page->filter('.menu-list')->filter('li > a')->each(function ($item) {
            $this->results[$item->attr('href')] = $item->filter('a')->text();
        });

        $data = $this->results;
       

        return view('front_end/nutrition/index', compact('data'));

        //dd($data);

    }
}

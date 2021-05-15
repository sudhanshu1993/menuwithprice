<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Goutte\Client;
use Illuminate\Http\Request;

class nutrition extends Controller
{
    private $results = array();
    private $state = array();
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
    public function state($id)
    {
        
   
        $client = new Client();
       
         $url = 'https://www.menuwithprice.com/nutrition/'.$id;
         $page = $client->request('GET', $url);

      

         $page->filter('.bread-crumbs > span')->each(function ($item) {
         $this->results[$item->attr('href')] = $item->filter('a')->text();
         });
         $data = $this->results;


         $page->filter('.choose-state')->filter('a')->each(function ($item) {
            $this->state[$item->attr('href')] = $item->filter('a')->text();
            });
            $datastate = $this->state;
       

        return view('front_end/nutrition/applebees/index', compact('data','datastate','id'));
 
          //dd($datastate);
    }
}

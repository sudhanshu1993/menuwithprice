<?php

namespace App\Http\Controllers;
use Goutte\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class menu extends Controller
{
    private $results = array();
    private $bred = array();
    public function index($id,$id1)
    {
        $client = new Client();
       
        $url = 'https://www.menuwithprice.com/menu/'.$id.'/'.$id1;
           //echo $url;
           $page = $client->request('GET', $url);
   
         
   
           $page->filter('.state-list')->filter('li > a')->each(function ($item) {
            $this->results[$item->attr('href')] = $item->filter('a')->text();
            });
   
           $data = $this->results;
        //    $page->filter('.bread-crumbs > span >a')->each(function ($item) {
        //     $this->bred[$item->attr('href')] = $item->filter('a')->text();
        //     });
        //     $bre = $this->bred;
          
   
          return view('front_end/menu.applebees/alabama/index', compact('data'));
        
    }
}

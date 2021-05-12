<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('/','front_end/index');
Route::view('/about','front_end/about');
Route::view('/contact','front_end/contact');
Route::view('/privacy','front_end/privacy');
Route::view('/term','front_end/term');

Route::view('/menu-and-price','front_end/menu-and-price/index');
Route::view('/menu/aandw','front_end/menu/aandw/index');
Route::view('/menu/aandw/alabama','front_end/menu/aandw/alabama/index');
Route::view('/menu/aandw/alabama/birmingham','front_end/menu/aandw/alabama/birmingham/index');
Route::view('/menu/aandw/alabama/birmingham/310558','front_end/menu/aandw/alabama/birmingham/310558/index');




Route::view('/cuisine','front_end/cuisine/index');
Route::view('/cuisine/afghan','front_end/cuisine/afghan/index');
Route::view('/menu/arya-kabob-house','front_end/menu/arya-kabob-house/index');
Route::view('/menu/arya-kabob-house/new-york','front_end/menu/arya-kabob-house/new-york/index');
Route::view('/menu/arya-kabob-house/new-york/flushing','front_end/menu/arya-kabob-house/new-york/flushing/index');
Route::view('/menu/arya-kabob-house/new-york/flushing/658336','front_end/menu/arya-kabob-house/new-york/flushing/658336/index');


Route::view('/restaurant-near-me','front_end/restaurant-near-me/index');
Route::view('/location/alabama','front_end/location/alabama/index');
Route::view('/location/alabama/birmingham','front_end/location/alabama/birmingham/index');
Route::view('/menu/chick-fil-a/alabama/birmingham/','front_end/menu/chick-fil-a/alabama/birmingham/index');
Route::view('/menu/chick-fil-a/alabama/birmingham/24333','front_end/menu/chick-fil-a/alabama/birmingham/24333/index');



Route::view('/nutrition','front_end/nutrition/index');
Route::view('/nutrition/applebees','front_end/nutrition/applebees/index');
Route::view('/nutrition/applebees','front_end/nutrition/applebees/index');
Route::view('/nutrition/applebees/2949-add-american-cheese','front_end/nutrition/applebees/2949-add-american-cheese/index');

Route::view('/menu/applebees/alabama','front_end/menu/applebees/alabama/index');
Route::view('/menu/applebees/alabama/athens','front_end/menu/applebees/alabama/athens/index');
Route::view('/menu/applebees/alabama/athens/1824','front_end/menu/applebees/alabama/athens/1824/index');
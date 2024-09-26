<?php
// this  is route to create path
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('welcome');
    //dump and die
   //dd(env('APP_URL'));

});

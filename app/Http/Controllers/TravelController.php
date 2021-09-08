<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
class TravelController extends Controller
{
    public function travels(){

    
       $travels = Trip::all();


        $travel = compact('travels');
         dd($travel);

       return view('travels', $travel);
}
}

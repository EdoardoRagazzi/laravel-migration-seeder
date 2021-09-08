<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
class TravelController extends Controller
{
    public function travels(){

    
       $travel = Trip::all();


        $travels = compact('travel');
        //  dd($travel);

       return view('travels', $travels);
}
}

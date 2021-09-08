<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function travels(){

    
       $travels = Travel::all();


        $travel = compact('travels');
        dd($travel);

       return view('travels', $travel);
}
}

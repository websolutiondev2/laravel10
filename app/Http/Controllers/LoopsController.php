<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; // Add this line to import the View facade

class LoopsController extends Controller
{
    //
    public function loop_demo()
    {
        if(View::exists('loops'))
        {
            $country =[
                'India','USA','RUSSIA','FRANCE'
            ];
            $count = 1;
            return view('loops',compact('country','count'));
        }
        else{
            return ('notfound');
        }
    }

    public function alertController()
    {
        return view('test');
    }
}

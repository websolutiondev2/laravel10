<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class Auth extends Controller
{
    //
    public function index()
    {
        echo "Welcome";
    }

    public function nesting_view()
    {
        return view('user.nesting_view');
    }
    public function viewexist()
    {
        if(View::exists('user.viewexists'))
        {
            return view('user.viewexists');
        }
        
        else{
            return "View is Unavailable";
        }
        
    }

    //passing data
    public function nameArray()
    {
          if(View::exists('passing_data.name_array'))
        {
            return view('passing_data.name_array',['brand_1'=>'SKODA','brand_2'=>'BMW','brand_3'=>'TATA']);
        }
        
        else{
            return "View is Unavailable";
        }
    }

    public function compactFunction()
    {
        $fav_color =[
            'red',
            'balck',
            'blue',
            'red'
        ];
          if(View::exists('passing_data.compact_function'))
        {
            return view('passing_data.compact_function',compact('fav_color'));
        }
        
        else{
            return "View is Unavailable";
        }
    }

    public function withfunction($id)
    {
          if(View::exists('passing_data.with_function'))
        {
            return view('passing_data.with_function')->with('id',$id);
        }
        
        else{
            return "View is Unavailable";
        }
    }
}

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
}

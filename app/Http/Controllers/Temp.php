<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Temp extends Controller
{
    //getting sesion data which is redirect after login page
    public function showTemp(Request $request)
    {
        // Retriving session data 
        $token =$request->session()->get('_token');

        echo $token;
        // // Check if the session data is exist
        // if($request->session()->has('_token'))
        // {
        //     // return view('temp')->with('_token',$token);
        //     return redirect()->to('/temp1')->with('_token',$token);

        // }else{
        //     return view('temp1')->with('message','Token does not exist in the session.');
        // }
    }
}

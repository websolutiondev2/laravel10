<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Formmodel;

class Form extends Controller
{
    public function formdata(Request $request)
    {
        $requestdata =$request->all();

       $validate = $request->validate([
        'email'=>'required|string|max:6|min:4',
        'password'=>'required|string|max:16|min:8',
       ]);

       if ($validate)
       {
        //  print_r($requestdata);
 echo "Email :".$requestdata['email']."<br>";
        
 echo "Password:".$requestdata['password'];
       }else{
         return redirect()->back()->with('failed', 'Form Submitted Failed!');

       }


//  return redirect()->back()->with('success', 'Form Submitted Successfully!');
   

       


    }
}

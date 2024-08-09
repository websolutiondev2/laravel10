<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Formmodel;


class Form extends Controller
{
    public function formdata(Request $request)
    {
      

        // echo $value;

        $requestdata =$request->all();

       $validate = $request->validate([
        'email'=>'required|email',
        'password'=>'required|string|max:16|min:8',
       ]);

       $requestdata =$request->all();
    //    print_r($requestdata);

         // Storing data in session using put function
         $request->session()->put('token', $requestdata['_token'] );

         // Retrive value from session using get function
         $value = $request->session()->get('_token');

    //    check value exist in session
    if($request->session()->has('_token'))
    {
        echo $value ;
    }else{
        echo"Not exist!";
    }

       echo "Email :" . $requestdata['email'] . "<br>";
       echo "Password:" . $requestdata['password'];

       return redirect()->to('/temp')->with('success', 'Form Submitted Successfully!');


//  return redirect()->back()->with('success', 'Form Submitted Successfully!');
   

       


    }
}

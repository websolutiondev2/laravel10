<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterUser extends Controller
{
    //Fetch records
    public function index(Register $req){
        $regitser = Register::all();
        return view('user')->with("regitser",$regitser);
    }
    // Add records
    public function add(Request $req){
        $regitser = new Register;
        $regitser->email = $req->email;
        $regitser->phone = $req->phone;
        $regitser->name = $req->name;
        $regitser->save();
        return redirect()->back();
    }

    // Edit Records
    public function edit(Request $req){
        $register = Register::find($req->id);
        return view('edit_user')->with('datas',$register);
    }

    // Update data
    public function update(Request $req){
        $register = Register::find($req->id);
        $register->update([
            'name'=>$req->name,
            'email'=>$req->email,
            'phone'=>$req->phone,
        ]);
        return redirect('register_user');
       
        
    }

    // Delete user
    public function delete(Request $req){
        $register = Register::find($req->id);
        $register->delete();
        return redirect('register_user');
    }


}
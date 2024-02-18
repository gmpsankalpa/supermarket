<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function viewregister()
    {
        return view('customerRegister');
    }

    public function insertuser(Request $req)
    {
       

        $req->validate([

            'name'=>'required|string|max:100',
            'email'=>'required|email|unique:users',
            'phone'=>'required|max:12',
            'address'=>'required|string|max:100',
            'password'=>'required|confirmed|max:30',
        ]);
        

            $data['name']=$req->name;
            $data['email']=$req->email;
            $data['phone']=$req->phone;
            $data['address']=$req->address;
            $data['password']=($req->password);



            $newuser=User::create($data);

            if($newuser)
            {
                return redirect('register')->with('status',"User Registered Sucessfully");
            }else
            {
                return redirect('register')->with('status',"Registration Error");
            }
    }


    public function viewlogin()
    {
        return view('login');

    }

    public function authlogin(Request $req)
    {
        

        $req->validate([

            'email'=>'required',
            'password'=>'required|max:30',

        ]);

        $credentials=$req->only('email','password');


        if(Auth::attempt($credentials))
        {
            // $req->session()->genarate();
            return redirect('order')->with('status',"sucesfully loging");
        }else
        {
            return redirect('login')->with('status',"Login failed");
        }

        
    }



}

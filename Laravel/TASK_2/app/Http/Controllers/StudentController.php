<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function registration()
    {
        return view("registration");
    }

    public function login()
    {
        return view("login");
    }


    public function registrationSubmitted(Request $request){
        // echo $request->name;
        // echo $request->email;

        $validate = $request->validate([
            "name" => "required|min:5|max:25",
            "email" => "email",
            'password' => 'required',
            'designation' => 'required',
            'address' => 'required'
        ],
        //    ['password.required'=>"Please put you password here"],
        );
    }

    public function loginSubmitted(Request $request){
        
        //pre defined static user
        $user = array(
            "email" => "abc@gmail.com",
            "password" => "1234"
        );
        $user = (object)$user;

        if($user->email == $request->email and $user->password == $request->password) {
            
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Login Successfull")';  
            echo '</script>';
        }
        else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Invalid User")';  
            echo '</script>';
        }

    }
}

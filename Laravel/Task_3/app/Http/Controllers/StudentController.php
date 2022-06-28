<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    public function StudentRegistration(){
        return view('registration')->with('message', '');
    }

    public function StudentRegistrationSubmitted(Request $request){
        
        //Performing Validation
        $validate = $request->validate([
            "name" => "required",
            "pass" => "required"
        ]);
        
        //Saving info in database
        $student = new Student();
        $student->name = $request->name;
        $student->password = $request->pass;
        $student->save();

        return view('registration')->with('message', 'Registration Completed');
    }


    public function StudentLogin(){
        return view('login');
    }

    public function StudentLoginSubmitted(Request $request){
        //Performing Validation
        $validate = $request->validate([
            "id" => "required",
            "pass" => "required"
        ]);


        $student = Student::whereRaw("BINARY id = '$request->id'")
        ->whereRaw("BINARY password = '$request->pass'")
        ->first();
        
        if(!empty($student)){
            return redirect()->route('StudentDash');
        }
        else{
            return "Invalid";
        }
    }

    public function StudentDash(){
        $students = Student::all();
        return view('dashboard')->with("students", $students);
    }
}

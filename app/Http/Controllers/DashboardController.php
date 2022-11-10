<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Users;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view ('student.dashboard');
    }

    public function class(){
        return view ('classes.class');
    }

    public function course(){
        return view ('course.course');
    }

    public function professor(){
        return view ('professor.professor');
    }


    // this is for pagination for Studentlist in Student navigation
    public function student(){
    
         $data = Student::paginate(10);

         return view ('student.student',['students'=>$data]);
    
    }

    public function grading(){
        return view('grading.grading');
    }

    public function setting(){
        return view('setting.setting');
    }

    public function sample(){
        return view ('grading.sample');
    }

}

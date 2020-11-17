<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Display pagination
    public function getStudents(){
        $student = Student::paginate(10);
        return view('welcome', compact('student'));
    }
}

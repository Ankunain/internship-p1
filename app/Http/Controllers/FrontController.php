<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {

        $students = Student::latest()->get();
        
        return view('front.home', compact('students'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }
}

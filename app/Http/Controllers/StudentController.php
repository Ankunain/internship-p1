<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();

        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        // return $request;

        $student = new Student();
        $student->name = $request->name;
        $student->roll_no = $request->roll_no;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->class = $request->class;
        $student->address = $request->address;
        $student->save();

        return response()->json([
            'message' => 'Data created successfully'
        ]);
    }
}

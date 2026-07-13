<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function editStore($id, Request $request)
    {
        // return $request;

        // $student = new Student();

        $validator = Validator($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json([
                'status' => 'validation',
                'error' => $validator->errors()
            ]);
        }


        $student = Student::find($id);

        $student->name = $request->name;
        $student->roll_no = $request->roll_no;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->class = $request->class;
        $student->address = $request->address;

        $student->save();

        return response()->json([
            'message' => 'Data Updated Successfully'
        ]);
    }


    public function delete(Request $req)
    {

        $id = $req->id;

        $student = Student::find($id);

        $student->delete();

        return 1;
    }


    public function edit($id)
    {
        $student = Student::find($id);

        $data['student'] = $student;

        return view('student.edit', $data);
    }
}

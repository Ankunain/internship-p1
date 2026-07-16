<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        if ($request->isMethod('post')) {


            // $validator = Validator::make($request->all(), [
            //     'email' => 'required',
            //     'password' => 'required|min:6'
            // ], [

            //     'password.min' => 'Please enter minimum 6 characters in your password.',
            //     'password.required' => 'fcsdjcvdvns',

            // ]);


            // if ($validator->fails()) {
            //     return response()->json([
            //         'status' => 'validation',
            //         'errors' => $validator->errors()
            //     ]);
            // }

            $validated = $request->validate([
                'email' => 'required',
                'password' => 'required|min:6'
            ]);


            // $request->email;
            // $request->password;

            // $validated['email'];
            // $validated['password'];


            // if ($request->remember_me == 1) {
            //     $remember = true;
            // } else {
            //     $remember = false;
            // }

            $remember = $request->remember_me ? true : false;

            if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']], $remember)) {

                // return 'Login Successfull';

                return redirect()->route('user.dashboard');
            } else {
                return 'Login Failed Please check your credentials';
            }
        } else {
            return view('auth.login');
        }
    }


    public function register(Request $request)
    {

        if ($request->isMethod('post')) {


            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:6'
            ]);


            $user = new User();

            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->password = Hash::make($validated['password']);
            $user->save();

            return redirect()->back()->with('message', 'User Created Successfully');
        } else {
            return view('auth.register');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
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
                'password' => 'required'
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


    public function forgot(Request $request)
    {

        if ($request->isMethod('post')) {


            $request->validate([
                'email' => 'required',
            ]);

            $user =  User::where('email', $request->email)->first();

            if ($user) {


                // $rember_token =  Str::random(4);

                $rember_token =  rand(1000, 9999);

                // $user->remember_token = $rember_token;

                // $user->save();

                $user->update([
                    'remember_token' =>  $rember_token
                ]);

                Mail::to($user->email)->send(new ForgotPasswordMail($user));
            } else {

                return redirect()->back()->with('error', 'This email not exists. please check your email again.');
            }
        } else {
            return view('auth.forgot');
        }
    }

    public function reset(Request $request, $remember_token = null)
    {

        // $user = User::where('remember_token', $remember_token)->first();

        // if (!$user) {
        //     abort(404);
        // }


        if ($request->isMethod('post')) {

            $request->validate([
                'password' => 'required',
                'c_password' => 'required',
                'otp' => 'required'
            ]);

            $user = User::where('remember_token', $request->otp)->first();

            if (!$user) {
                return redirect()->back()->with('error', 'Entered OTP is wrong.');
            }

            $user->update([
                'password' =>  Hash::make($request->password),
                'remember_token' => NULL,
            ]);

            return redirect()->route('login')->with('success', 'Password Changed Successfully.');
        } else {

            return view('auth.reset', compact('remember_token'));
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('login');
    }  
      

    public function customLogin(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return redirect('login')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }
        else{
            $validator['message'] = 'Login details are not valid';
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }
    }
      

    public function customRegistration(Request $request)
    {  
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }
           
        $data = $request->all();
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
          ]);
         
        return redirect("/login")->withSuccess('You have signed-in');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
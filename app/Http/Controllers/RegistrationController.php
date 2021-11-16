<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Validator;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function buyerRegistrationInformation(Request $request)
    {           
        $data = $request->all();
         
        return view('buyer-login-information', ['first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'birthday' => $data['birthday'],
            'state' => $data['state'],
            'country' => $data['country'],
            'hear' => $data['hear'],
            'referral_code' => $data['referral_code'],
            'success' => 'fail',
        ]);
    }

    public function buyerRegistrationForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|confirmed|unique:users',
            'password' => 'required|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('buyer-signup')
                        ->withErrors($validator)
                        ->withInput();
        }
           
        $data = $request->all();
        User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'birthday' => $data['birthday'],
            'state' => $data['state'],
            'country' => $data['country'],
            'hear' => $data['hear'],
            'referral_code' => $data['referral_code'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_id' => $data['user_id'],
            'secret_question' => $data['secret_question'],
            'answer' => $data['answer'],
            'role' => 'buyer',
          ]);
        
        //   return redirect("/login")->withSuccess('You have registered');

          return view('buyer-login-information', ['first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'birthday' => $data['birthday'],
            'state' => $data['state'],
            'country' => $data['country'],
            'hear' => $data['hear'],
            'referral_code' => $data['referral_code'],
            'success' => 'success',
        ]);
    }

    public function sellerRegistrationInformation1(Request $request)
    {           
        $data = $request->all();
         
        return view('seller-login-information', ['first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'birthday' => $data['birthday'],
            'state' => $data['state'],
            'country' => $data['country'],
            'hear' => $data['hear'],
            'referral_code' => $data['referral_code'],
        ]);
        
    }

    public function sellerRegistrationInformation2(Request $request)
    {      
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|confirmed|unique:users',
            'password' => 'required|confirmed',
        ]);
        if ($validator->fails()) {
            return redirect('seller-register')
                        ->withErrors($validator)
                        ->withInput();
        }
        $data = $request->all();
         
        return view('australian-only', ['first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'birthday' => $data['birthday'],
            'state' => $data['state'],
            'country' => $data['country'],
            'hear' => $data['hear'],
            'referral_code' => $data['referral_code'],
            'email' => $data['email'],
            'paypal' => $data['paypal'],
            'user_id' => $data['user_id'],
            'password' => $data['password'],
            'secret_question' => $data['secret_question'],
            'answer' => $data['answer'],
            'success' => 'fail',
        ]);
        
    }

    public function sellerRegistrationForm(Request $request)
    {
        $data = $request->all();
        // dd($data);
        User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'birthday' => $data['birthday'],
            'state' => $data['state'],
            'country' => $data['country'],
            'hear' => $data['hear'],
            'referral_code' => $data['referral_code'],
            'email' => $data['email'],
            'paypal' => $data['paypal'],
            'password' => Hash::make($data['password']),
            'user_id' => $data['user_id'],
            'ABN' => $data['ABN'],
            'gst_registered' => $data['gst_registered'],
            'secret_question' => $data['secret_question'],
            'answer' => $data['answer'],
            'role' => 'seller',
          ]);
        
          return view('australian-only', ['first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'birthday' => $data['birthday'],
            'state' => $data['state'],
            'country' => $data['country'],
            'hear' => $data['hear'],
            'referral_code' => $data['referral_code'],
            'email' => $data['email'],
            'paypal' => $data['paypal'],
            'ABN' => $data['ABN'],
            'gst_registered' => $data['gst_registered'],
            'user_id' => $data['user_id'],
            'password' => $data['password'],
            'secret_question' => $data['secret_question'],
            'answer' => $data['answer'],
            'success' => 'success',
        ]);
    }
}

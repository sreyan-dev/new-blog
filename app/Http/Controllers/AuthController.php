<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

 

class AuthController extends Controller
{
    public function login_view(){
         return view('login');
    }
    public function login(LoginRequest $request){
        if(Auth::attempt(['email'=> $request->email,'password'=>$request->password])){
            return redirect()->route('login.view')->with('status','login successfully');
        }
        else{
            return redirect()->back()->witherrors(['email' => 'আপনার ইনপুটকৃত ডাটা ভুল'])->withinput();
        }
    }


    public function registration(){
        return view('registration');
    }
    public function register(RegistrationRequest $request){
        $validated = $request->validated();
       $validated['password']=hash::make($validated['password']);
       User::create($validated);
        return redirect()->back()->with('status','registration successfully');
    }
}

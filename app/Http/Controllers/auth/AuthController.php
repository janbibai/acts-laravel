<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
     {
         return view('auth.login');
     }

     public function login(Request $request)
     {
 
         $request->validate([
             'email' => 'required|email',
             'password' => 'required',
         ]);
 
         $authLogin = User::where('email', $request->email)->first();
 
         if ($authLogin && Hash::check($request->password, $authLogin->password)) {
             Auth::login($authLogin);
             Session::put('loginId', $authLogin->id);
             return redirect()->route('std.myWelcomeView')->with('success', 'Login successful');
         } else {
             return back()->with('fail', 'Email or password is incorrect');
         }
     }
}

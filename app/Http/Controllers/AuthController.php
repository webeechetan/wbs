<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function authenticate(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $attempt = Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
        if($attempt){
            return redirect()->route('dashboard');
        }
        return back()->with('error','Login Failed');
        // $user = new User();
        // $user->name = 'webeeadmin';
        // $user->password = Hash::make('123456');
        // $user->email = 'webeeadmin@gmail.com';
        // $user->save();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

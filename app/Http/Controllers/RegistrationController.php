<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class RegistrationController extends Controller
{
    // redirect /login
    public function register_create(){
        return view('registration');
    }
    public function register_store(Request $request){

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        auth()->login($user); // avtomaturad aloginebs users
        return redirect()->to('/posts');
    }
    //redirect /my_posts
    public function login(){
        //$view->
        return view('login');
    }
    public function login_check(Request $request){

        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->except('_token');

        if (Auth::attempt($credentials)) {
            return redirect('/posts');
        }
        else{
        return redirect('login')->with('error');
        }
    }
    public function logout(){

        Auth::logout();
        return redirect('posts');

    }

}

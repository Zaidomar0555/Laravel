<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{

    public function __construct(){
        $this->middleware(['guest']);
    }

    public function index(){
        return view('auth.register');
    }


    public function store(Request $request){
        /*
        What i want from this function is to: 

        1- validation
        2- store user
        3- sign the user in
        4- redirect the user
         */

         // 1

         $this->validate($request, [
             'name' => 'required|max:255',
             'username' => 'required',
             'email' => 'required|email|max:255',
             'password' => 'required|confirmed'

         ]);
        
         //2

         User::create([
             'name' => $request->name,
             'username' => $request->username,
             'email' => $request->email,
             'password' => Hash::make($request->password)
         ]);

         // 3

         auth()->attempt($request->only('email', 'password'));

         // 4

         return redirect()->route('dashboard');
         


    }
}

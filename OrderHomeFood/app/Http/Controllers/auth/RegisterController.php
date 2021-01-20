<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * This controller will have:
     * 1- index page that shows the from.
     * 2- store function: this function will allow the user to register to be able to use the website functionalities.
     */

    public function __construct(){
        $this->middleware(['guest']);
    }

     public function index(){
         return view('auth.register');
     }



     /*
     This function "store" will do the following:
     1 - validate the form so the user can see if they miss an input
     2- store the input in the database
     3- (sign the user in)
     4-  redirect the user
     */
     public function store(Request $request){

        //1- this is important because it will allow the user to visualize whats missing.
        $this->validate( $request,[

            'name'=> 'required|max:255',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        //2- create: create is to store the user info in the database
        User::create([

            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);


        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('menu');

        //dd('store');

     }
}

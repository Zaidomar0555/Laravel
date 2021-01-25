<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{

 use AuthenticatesUsers;



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
          'role'=>  'required',
          'email' => 'required|email|max:255',
          'password' => 'required|confirmed'

      ]);

      //2

      User::create([
          'name' => $request->name,
          'role' => $request->role,
          'email' => $request->email,
          'password' => Hash::make($request->password)
      ]);

      // 3

      auth()->attempt($request->only('email', 'password'));

         return redirect()->route('home');


 }

 protected function authenticated(Request $request, $user)
   {
     if($user->isAdmin()) {
         return redirect(route('admin'));
     }

     // to user dashboard
     else if($user->isUser()) {
         return redirect(route('user'));
     }

     abort(404);


   }

}

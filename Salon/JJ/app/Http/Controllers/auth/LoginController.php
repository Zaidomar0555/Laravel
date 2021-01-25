<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;

class LoginController extends Controller
{

    use AuthenticatesUsers;



  public function __construct(){
       $this->middleware(['guest']);
   }

   public function index(){


       return view('auth.login');
   }

   public function store(Request $request){


       $user::User();

       $this->validate($request, [
           'email' => 'required|email',
           'password' => 'required',

       ]);

       if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
           return back()->with('status', 'Invalid login details');
       }

       //return redirect()->route('dashboard');

       if($user->isAdmin()) {
           return redirect(route('admin'));
       }

       // to user dashboard
       else if($user->isUser()) {
           return redirect(route('user'));
       }

       abort(404);

   }

   // protected function authenticated(Request $request, $user)
   //   {
   //       // to admin dashboard
   //
   //   }
}

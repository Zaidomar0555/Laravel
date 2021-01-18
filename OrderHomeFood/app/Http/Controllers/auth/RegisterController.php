<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function create(Request $req)
    {
        // validate


        $this->validate($req, [
            'name' => 'required|max:255',
            'username' => 'required',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed'

        ]);
       
        // create
       User::create([
           'name' => $req->name,
           'username' => $req->username,
           'email' => $req->email,
           'password'=> Hash::make($req->password)
       ]);




       auth()->attempt($req->only('email', 'password'));

       // 4

       return redirect()->route('dashboard');


    }
}

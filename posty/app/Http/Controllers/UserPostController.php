<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserPostController extends Controller
{
    /**
     * The goal of this controller is to show list of the user posts in 
     * a different page, only the user posts.
     */
    public function index(User $user){
        $posts = $user->posts()->with(['user', 'likes'])->paginate(3);
        return view('users.posts.index', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}

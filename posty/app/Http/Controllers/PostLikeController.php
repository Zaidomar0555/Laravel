<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Like;

class PostLikeController extends Controller
{
    public function store(Post $posts, Request $request){

        if($posts->likedBy($request->user())){
            return response(null, 409);
        }

        $posts->likes()->create([
            'user_id' => $request->user()->id,
            
        ]);

        return back();
    }

    public function destroy(Post $posts, Request $request){


        $request->user()->likes()->where('post_id', $posts->id)->delete();

        return back();
    }
}

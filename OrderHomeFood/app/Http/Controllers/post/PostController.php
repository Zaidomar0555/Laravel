<?php

namespace App\Http\Controllers\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Post;


class PostController extends Controller
{
  /*
  This controller will be for posting comments about a particular meal a user selected. when a user selects the meal's name, he/she will be able to either
  view comments from different users or post a comment.
  */

  public function store(Request $request)
  {
    $request->meal()->posts()->creat($request->only('body'));

    return back();
  }
}

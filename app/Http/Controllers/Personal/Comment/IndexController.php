<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\Post;

class IndexController
{
    public function __invoke()
    {
        $comments = auth()->user()->comment;
        $posts = Post::all();
        return view('personal.comment.index',compact('comments','posts'));
    }
}

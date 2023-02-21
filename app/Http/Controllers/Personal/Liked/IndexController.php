<?php

namespace App\Http\Controllers\Personal\Liked;

class IndexController
{
    public function __invoke()
    {
        $posts = auth()->user()->post;
        return view('personal.liked.index',compact('posts'));
    }
}

<?php

namespace App\Http\Controllers\Main\News;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $users = User::all();
        $comments = $post->comment;
        $date = Carbon::parse($post->created_at);
        $tags = $post->tag;
        return view('main.news.show',compact('post','tags','date','comments','users'));
    }
}

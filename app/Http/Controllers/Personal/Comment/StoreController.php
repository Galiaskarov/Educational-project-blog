<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\Comment;
use App\Models\Post;

class StoreController
{
    public function __invoke()
    {
        $data = request()->validate([
            'comment'=>'string',
            'post_id'=>'int'
        ]);
        $data['user_id'] = auth()->user()->id;
        Comment::create($data);
        return redirect()->route('main.news.show',$data['post_id']);
    }
}

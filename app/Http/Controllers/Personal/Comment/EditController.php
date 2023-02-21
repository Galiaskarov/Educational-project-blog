<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\Comment;
use App\Models\Post;

class EditController
{
    public function __invoke(Comment $comment)
    {
        return view('personal.comment.edit',compact('comment'));
    }
}

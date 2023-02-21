<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\Comment;
use App\Models\Post;

class UpdateController
{
    public function __invoke(Comment $comment)
    {
       $date = request()->validate([
           'comment'=>'string',
       ]);
       $comment->update($date);
       return redirect()->route('personal.comment.index');
    }
}

<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;


class ShowController extends Controller
{
    public function __invoke(Tag $tag)
    {
     return view('admin.tag.show',compact('tag'));
    }
}

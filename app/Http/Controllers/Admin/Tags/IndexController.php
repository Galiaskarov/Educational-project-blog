<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use function view;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::paginate(4);
     return view('admin.tag.index',compact('tags'));
    }
}

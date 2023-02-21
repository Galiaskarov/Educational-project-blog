<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use function view;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['category'] = Category::all()->count();
        $data['tag'] = Tag::all()->count();
        $data['post'] = Post::all()->count();
        $data['user'] = Post::all()->count();
        return view('admin.main.index',compact('data'));
    }
}

<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use function view;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::paginate(4);
     return view('admin.user.index',compact('users'));
    }
}

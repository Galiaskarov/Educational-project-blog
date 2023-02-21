<?php

namespace App\Http\Controllers\Personal\Main;

class IndexController
{
    public function __invoke()
    {
        $countComment = count(auth()->user()->comment);

        return view('personal.main.index',compact('countComment'));
    }
}

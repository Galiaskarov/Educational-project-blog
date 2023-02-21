<?php

namespace App\Http\Controllers\Personal\Liked;

class StoreController
{
    public function __invoke()
    {
        $data = request()->validate([
            'post_id'=>'int',
        ]);
        auth()->user()->post()->toggle($data);
        return redirect()->route('main.news.index');
    }
}

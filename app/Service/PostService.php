<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Exception;

class PostService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['preview_image'] = Storage::disk('public')->put('/img',$data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/img',$data['main_image']);
            $tags = $data['tag_id'];
            unset($data['tag_id']);
            $post = Post::create($data);
            $post->tag()->attach($tags);
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            abort(404);
        }
    }

    public function  update($data,$post)
    {
        try {
            DB::beginTransaction();
            $tags = $data['tag_id'];
            unset($data['tag_id']);
            if(isset($data['preview_image'])){
                $data['preview_image'] = Storage::disk('public')->put('/img',$data['preview_image']);
            }
            if(isset($data['main_image'])){
                $data['main_image'] = Storage::disk('public')->put('/img',$data['main_image']);
            }
            $post->update($data);
            $post->tag()->sync($tags);
            DB::commit();
        }catch (Exception $exception){
            DB::rollBack();
            abort(500);
        }

    }

}

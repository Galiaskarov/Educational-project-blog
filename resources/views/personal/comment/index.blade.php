@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="mb-3">Коментарии</h1>
                        @foreach($comments as $comment)


                            <div class="card-body p-4 bg-white mb-3 border rounded">
                                <div class="">
                                    @foreach($posts as $post)
                                        <h5>{{$comment->post_id === $post->id?$post->title:''}}</h5>
                                    @endforeach
                                    <p class="small">{{$comment->dateAsCarbon->diffForHumans()}}</p>
                                    <p>
                                        {{$comment->comment}}
                                    </p>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex text-align-center">
                                            <a href="{{route('personal.comment.edit',$comment->id)}}" class="ml-2"><i class="fas fa-pen"></i></a>
                                            <form action="{{route('personal.comment.delete',$comment->id)}}" method="post" class="ml-2">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="border-0 bg-transparent p-0 text-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Коментарии</h1>
                        <form action="{{route('personal.comment.update',$comment->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <input type="text" name="comment" value="{{$comment->comment}}">
                            <button type="submit" class="btn btn-primary">Изменить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

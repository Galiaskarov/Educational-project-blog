@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="mb-3 col-12">Изменение тэга</h1>

                    <form class="ml-2" action="{{route('admin.tag.update',$tag->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label>Тэг</label>
                            <input type="string" class="form-control" value="{{$tag->title}}" name="title">
                        </div>
                        @error('title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <button type="submit" class="btn btn-primary">Изменить</button>
                    </form>




                </div>
            </div><!-- /.container-fluid -->
        </section>
            <div class="container border-bottom mt-4">
                <a href="{{route('admin.tag.index')}}">Tеги</a>/<a href="{{route('admin.tag.edit',$tag->id)}}">Изменение</a>
            </div>
        <!-- /.content -->
    </div>
@endsection

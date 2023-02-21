@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Понравившиеся посты</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container">


            <div class="col-10">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>НАЗВАНИЯ</th>
                                <th>ДЕЙСТВИЯ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->title}}</td>
                                    <td><a href="{{route('admin.category.show',$post->id)}}" class="border-bottom border-primary">Посмотреть</a></td>
                                    <td>
                                        <form action="{{route('personal.liked.delete',$post->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"  class="btn btn-outline-danger">
                                                Удалить
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                        @endforeach
                    </div>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

    </div>
@endsection

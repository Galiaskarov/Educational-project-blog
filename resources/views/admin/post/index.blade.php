@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="mb-3 col-12">Посты</h1>
                    <div class="col-3 mb-3">
                        <a href="{{route('admin.post.create')}}"  class="btn btn-block btn-primary">Добавить</a>
                    </div>
                        <div class="col-10">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>НАЗВАНИЕ</th>
                                            <th>Действия</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($posts as $post)
                                        <tr>

                                            <td>{{$post->id}}</td>
                                            <td>{{$post->title}}</td>
                                            <td><a href="{{route('admin.post.edit',$post->id)}}" class="border-bottom border-primary">Изменить</a></td>
                                            <td>
                                                <form action="{{route('admin.post.delete',$post->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-outline-danger">
                                                        Удалить
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
            <div class="container">
                {{$posts->links()}}
            </div>

            <div class="container border-bottom">
                <a href="{{route('admin.post.index')}}">Посты</a>/
            </div>
        <!-- /.content -->
    </div>
@endsection

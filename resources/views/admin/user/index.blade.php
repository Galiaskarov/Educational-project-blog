@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="mb-3 col-12">Пользователи</h1>
                    <div class="col-3 mb-3">
                        <a href="{{route('admin.user.create')}}"  class="btn btn-block btn-primary">Добавить</a>
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
                                            <th>ДЕЙСТВИЯ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td><a href="{{route('admin.user.show',$user->id)}}" class="border-bottom border-primary">Посмотреть</a></td>
                                            <td><a href="{{route('admin.user.edit',$user->id)}}" class="border-bottom border-success text-success">Изменить</a></td>
                                            <td>
                                                <form action="{{route('admin.user.delete',$user->id)}}" method="post">
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
                {{$users->links()}}
            </div>

            <div class="container border-bottom">
                <a href="{{route('admin.user.index')}}">Пользователи</a>/
            </div>
        <!-- /.content -->
    </div>
@endsection

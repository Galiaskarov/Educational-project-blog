@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="mb-3 col-12">Показ пользователя</h1>

                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>EMAIL</th>
                                            <th>Роль</th>
                                            <th>ДЕЙСТВИЯ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{$user->id}}:</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>@foreach($roles as $id=>$role)
                                            {{$user->role == $id? $role:''}}
                                            @endforeach</td>
                                            <td><a href="{{route('admin.user.edit',$user->id)}}" class="text-success">Изменить</a></td>
                                            <td>
                                                <form action="{{route('admin.user.delete',$user->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="border-0 bg-transparent text-danger">
                                                        удалить
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
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
            <div class="container border-bottom mt-4">
                <a href="{{route('admin.user.index')}}">Пользователи</a>/<a href="{{route('admin.user.show',$user->id)}}">Показ</a>
            </div>
        <!-- /.content -->
    </div>
@endsection

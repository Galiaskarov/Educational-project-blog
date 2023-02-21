@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="mb-3 col-12">Изменение данных пользователя</h1>

                    <form class="ml-2" action="{{route('admin.user.update',$user->id)}}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label>Имя пользователя</label>
                            <input type="string" class="form-control" value="{{$user->name}}" name="name">
                        </div>
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                        <div class="form-group">
                            <label>Электронная почта пользователя</label>
                            <input type="email" class="form-control" value="{{$user->email}}" name="email">
                        </div>
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class="form-group">
                            <label>Роли</label>
                            <select class="form-control" name="role">
                                @foreach($roles as $id=>$role)
                                    <option
                                        {{$id === $user->role?'selected':''}}
                                        value="{{$id}}">{{$role}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Изменить</button>
                    </form>




                </div>
            </div><!-- /.container-fluid -->
        </section>
            <div class="container border-bottom mt-4">
                <a href="{{route('admin.user.index')}}">Пользователи</a>/<a href="{{route('admin.user.edit',$user->id)}}">Изменение</a>
            </div>
        <!-- /.content -->
    </div>
@endsection

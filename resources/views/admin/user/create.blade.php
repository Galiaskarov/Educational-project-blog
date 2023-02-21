@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="mb-3 col-12">Добавление пользователей</h1>

                    <form class="ml-2" action="{{route('admin.user.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Имя пользователя</label>
                            <input type="string" class="form-control" placeholder="Имя пользователя" name="name">
                        </div>
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                        <div class="form-group">
                            <label>Электронная почта</label>
                            <input type="email" class="form-control" placeholder="Электронная почта" name="email">
                        </div>
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class="form-group">
                            <label>Роли</label>
                            <select class="form-control" name="role">
                                @foreach($roles as $id=>$role)
                                    <option value="{{$id}}">{{$role}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('password')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <button type="submit" class="btn btn-primary">Создать</button>
                    </form>

                </div>
            </div><!-- /.container-fluid -->
        </section>
            <div class="container border-bottom mt-4">
                <a href="{{route('admin.user.index')}}">Пользователи</a>/<a href="{{route('admin.user.create')}}">Добавление</a>
            </div>
        <!-- /.content -->
    </div>
@endsection

@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="mb-3 col-12">Создание тега</h1>

                    <form class="ml-2" action="{{route('admin.tag.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Тег</label>
                            <input type="string" class="form-control" placeholder="Тег" name="title">
                        </div>
                        @error('title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <button type="submit" class="btn btn-primary">Создать</button>
                    </form>




                </div>
            </div><!-- /.container-fluid -->
        </section>
            <div class="container border-bottom mt-4">
                <a href="{{route('admin.tag.index')}}">Tеги</a>/<a href="{{route('admin.tag.create')}}">Создать</a>
            </div>
        <!-- /.content -->
    </div>
@endsection

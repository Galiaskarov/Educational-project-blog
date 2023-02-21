@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="mb-3 col-12">Показ категории</h1>

                        <div class="col-5">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">

                                        <tbody>
                                        <tr>
                                            <td>{{$category->id}} : {{$category->title}} </td>
                                            <td><a href="{{route('admin.category.edit',$category->id)}}" class="mr-3 text-success">Изменить</a></td>
                                            <td>
                                                <form action="{{route('admin.category.delete',$category->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="border-0 bg-transparent text-danger">
                                                        Удалить
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
                <a href="{{route('admin.category.index')}}">Категории</a>/<a href="{{route('admin.category.show',$category->id)}}">Показ</a>
            </div>
        <!-- /.content -->
    </div>
@endsection

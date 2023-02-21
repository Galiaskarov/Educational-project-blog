@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <h1 class="mb-3 col-12">Создание поста</h1>

                    <form class="ml-2" action="{{route('admin.post.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Заголовок</label>
                            <input type="string" class="form-control" placeholder="Заголовок" name="title">
                        </div>
                        @error('title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                        <div class="form-group">
                            <label>Контент</label>
                            <textarea id="summernote" name="content"></textarea>
                        </div>
                        @error('content')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputFile">Картинка превью</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label">Выберите изоброжение</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузить</span>
                                </div>
                            </div>
                        </div>
                        @error('preview_image')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                        <div class="form-group">
                            <label for="exampleInputFile">Главная картинка</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="main_image">
                                    <label class="custom-file-label">Выберите изоброжение</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузить</span>
                                </div>
                            </div>
                        </div>
                        @error('main_image')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                        <div class="form-group">
                            <label>Категории</label>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_id')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                        <div class="form-group">
                            <label>Тэги</label>
                            <select class="select2 select2-hidden-accessible" multiple="" name="tag_id[]" data-placeholder="Выберите тэги" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('tag_id')
                        <p class="text-danger">{{$message}}</p>
                        @enderror

                        <button type="submit" class="btn btn-primary">Создать</button>
                    </form>

                </div>
            </div><!-- /.container-fluid -->
        </section>
            <div class="container border-bottom mt-4">
                <a href="{{route('admin.post.index')}}">Посты</a>/<a href="{{route('admin.post.create')}}">Добавить</a>
            </div>
        <!-- /.content -->
    </div>
@endsection

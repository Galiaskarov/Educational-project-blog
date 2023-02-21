@extends('main.layouts.main')
@section('content')

    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{$date->translatedFormat('F')}} . {{$date->day}} . {{$date->year}} . {{$date->format('H:i')}}</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ Storage::url($post->main_image) }}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                       {!!$post->content!!}
                    </div>
                </div>

                <div class="row col-lg-9 mx-auto mb-4">
                    <h3 class="text-primary">Теги</h3>
                    @foreach($tags as $tag)
                    <p class="col-12 m-0 p-2 border-bottom">{{$tag->title}}</p>
                    @endforeach
                </div>

            </section>

            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="comment">
                        <h2 class="section-title mb-3 text-primary" data-aos="fade-up">Добавить коментарий</h2>
                        <div class="card">
                            <div class="card-body">
                                @foreach($comments as $comment)
                                <div class="d-flex flex-start align-items-center">
                                    <div>
                                        <h6 class="fw-bold text-primary mb-1">
                                            @foreach($users as $user)
                                                {{$user->id === $comment->user_id? $user->name:''}}
                                            @endforeach
                                        </h6>
                                        <p class="text-muted small mb-0">
                                            {{$comment->dateAsCarbon->diffForHumans()}}
                                        </p>
                                    </div>
                                </div>
                                <p class="mt-3 mb-4 pb-2">
                                    {{$comment->comment}}
                                </p>
                                @endforeach
                            </div>
                            <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                                @auth()
                                <form action="{{route('personal.comment.store')}}" method="post">
                                    @csrf
                                <div class="d-flex flex-start w-100">
                                    <div class="form-outline w-100">
                                        <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;" name="comment"></textarea>
                                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 60px;"></div><div class="form-notch-trailing"></div></div></div>
                                </div>
                                    <div>
                                        <input type="hidden" name="post_id" value="{{$post->id}}">
                                    </div>
                                <div class="float-end mt-2 pt-1">
                                    <button type="submit" class="btn btn-primary btn-sm">Добавить коментарий</button>
                                </div>
                                </form>
                                @endauth
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection

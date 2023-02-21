@extends('main.layouts.main')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Новости</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-md-4 fetured-post blog-post " data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ Storage::url($post->preview_image) }}" alt="blog post">
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="blog-post-category">{{$post->category->title}}</p>
                            <form action="{{route('personal.liked.store')}}" method="post">
                                @csrf
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <button type="submit" class="border-0 bg-transparent p-0">
                                    @auth()
                                    @if(auth()->user()->post->contains($post->id))
                                    <i class="fas fa-heart"></i>
                                    @else
                                    <i class="far fa-heart"></i>
                                    @endif
                                    @endauth
                                </button>
                            </form>
                        </div>
                        <a href="{{route('main.news.show',$post->id)}}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{$post->title}}</h6>
                        </a>
                    </div>
                    @endforeach
                </div>
                {{$posts->links()}}
            </section>

        </div>

    </main>
@endsection

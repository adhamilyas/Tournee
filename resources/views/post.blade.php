@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-2">{{ $post->title }}</h2>

                <p>By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/post?category={{ $post->category->slug }}" class="text-decoration-none">
                        {{ $post->category->name }}</a> </p>

                @if ($post->image)
                    <div style="max-height: 400px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid mt-3">
                @endif                

                <article class="my-3 ">
                    {!! $post->body !!}
                </article>


                <a href="/posts" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>


@endsection
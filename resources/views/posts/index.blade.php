@extends('layouts.default')

@section('content')
    
    @foreach($posts as $post)
    <div class="blog-post">
        <h2 class="blog-post-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
        <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="{{ route('userposts', $post->user->id) }}">{{ $post->user->name }}</a> in <a href="{{ route('categoryposts', $post->category->id) }}">{{ $post->category->title }}</a></p>

        <p>{{ str_limit(strip_tags($post->body), 500) }} <a href="{{ route('posts.show', $post->id) }}">Read more...</a></p>
    </div><!-- /.blog-post -->
    @endforeach




    <nav class="blog-pagination">
        <div class="text-center">
            {!! $posts->links() !!}
        </div>
    </nav>
    
@endsection
@extends('layouts.default')

@section('content')
    
    <div class="blog-post">
        <img src="{{ asset('images/' . $post->f_image) }}" alt="" height="450" width="750" />
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="{{ route('userposts', $post->user->id) }}">{{ $post->user->name }}</a> in <a href="{{ route('categoryposts', $post->category->id) }}">{{ $post->category->title }}</a></p>

        <p>{{ $post->body }}</p>
    </div><!-- /.blog-post -->
	<hr>
	<div class="blog-post">
        <h2 class="blog-post-title">Comments</h2>
        <p>
        	@include('comments.create')
        </p>
@include('comments.show')
    </div>

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="{{ url('/') }}">Back</a>
    </nav>
    
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard - List of Posts</div>

                <div class="panel-body">
                    @include('layouts.partials.errors')
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Created at</th>
                          <th>Created by</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      @foreach($posts as $post)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $post->id }}</th>
                          <td> <a href="{{ route('posts.show', $post->id) }}">{!! str_limit(strip_tags($post->title), 40) !!}</a></td>
                          <td>{{ $post->created_at->diffForHumans() }}</td>
                          <td>{{ $post->user->name }}</td>
                          @if($post->user_id === auth()->user()->id)
                          <td><a href="{{ route('posts.edit', $post->id) }}">Edit</a></td>
                          <td><a href="">Delete</a></td>
                          @else
                          <td></td>
                          <td></td>
                          @endif
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  <nav class="blog-pagination">
                    <div class="text-center">
                        {!! $posts->links() !!}
                    </div>
                </nav>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            @include('layouts.partials.homesidebar')
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">Categories List</div>

                <div class="panel-body">

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
                      @foreach($categories as $category)
                      <tbody>
                        <tr>
                          <th scope="row">{{ $category->id }}</th>
                          <td>{{ $category->title }}</td>
                          <td>{{ $category->created_at->diffForHumans() }}</td>
                          <td>{{ $category->user->name }}</td>
                          @if($category->user_id === auth()->user()->id)
                          <td><a href="{{ route('categories.edit', $category->id) }}">Edit</a></td>
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
                        {!! $categories->links() !!}
                    </div>
                </nav>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            @include('layouts.partials.homesidebar')
        </div>
    </div>
</div>
@endsection

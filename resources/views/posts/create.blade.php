
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">Publish new Post</div>

                <div class="panel-body">
					@include('layouts.partials.errors')

			        <form method="POST" action="/posts">
						{{ csrf_field() }}
					  	<div class="form-group">
						    <label for="title">Post title</label>
						    <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Post title here..." required>
						    <small id="title" class="form-text text-muted">Put your title here. Your title must be between 5 and 255 carateres.</small>
					  	</div>

					  	<div class="form-group">
							<select class="form-control" id="category" name="category" required>
							  	<option>select Category</option>
							  	@foreach($categories as $category)
							  	<option value="{{ $category->id }}">{{ $category->title }}</option>
							  	@endforeach
							</select>
						</div>

					  	<div class="form-group">
						    <label for="body">Post body</label>
						    <textarea class="form-control" id="body" name="body" rows="10" required></textarea>
					  	</div>

					  	<button type="submit" class="btn btn-primary">Publish</button>

					</form>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            @include('layouts.partials.homesidebar')
        </div>
    </div>
</div>
@endsection

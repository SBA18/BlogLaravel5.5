@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">Editing Post</div>

                <div class="panel-body">
					@include('layouts.partials.errors')
		
			        <form method="POST" action="/posts">
						{{ csrf_field() }}
						<input name="_method" type="hidden" value="PUT">
					  	<div class="form-group">
						    <label for="title">Post title</label>
						    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
					  	</div>

					  	<div class="form-group">
						    <label for="body">Post body</label>
						    <textarea class="form-control" id="body" name="body" rows="10" required>{{ $post->body }}</textarea>
					  	</div>

					  	<button type="submit" class="btn btn-primary">Update Post</button>

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
@guest
<p><a href="/login">Login</a> or <a href="/register">register</a> to comment !</p>
@else
@include('layouts.partials.errors')
<form method="POST" action="/posts/{{ $post->id }}/comments">
	{{ csrf_field() }}

  	<div class="form-group">
	    <textarea class="form-control" id="comment" name="comment" rows="3" required ></textarea>
  	</div>
  	<button type="submit" class="btn btn-primary">Comment</button>
</form>
@endguest
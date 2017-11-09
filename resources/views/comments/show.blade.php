
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<div class="row">
	<!-- Contenedor Principal -->
    <div class="comments-container">
		<h1>Comments</h1>
		<ul id="comments-list" class="comments-list">
		@foreach ($post->comments as $comment)
			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name by-author"><a href="http://creaticode.com/blog">{{ $comment->user->name }}</a></h6>
							<span>{{ $comment->created_at->diffForHumans() }}</span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
							{{ $comment->comment }}
						</div>
					</div>
				</div>
			</li>
		@endforeach
		</ul>
	</div>
	</div>

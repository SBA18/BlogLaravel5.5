<div class="panel panel-default">
    <div class="panel-heading">sidebar</div>

    <div class="panel-body">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link disabled" href="{{ url('/home') }}">Blog Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="{{ route('userposts', auth()->user()->id) }}">My Blogposts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.create') }}">Create post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="{{ route('categories.create') }}">Create category</a>
            </li>
        </ul>
    </div>
</div>
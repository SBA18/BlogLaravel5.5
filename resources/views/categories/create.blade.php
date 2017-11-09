@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">Create category </div>

                <div class="panel-body">

                    <form method="POST" action="/categories">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Post title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Category title here..." required>
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>

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
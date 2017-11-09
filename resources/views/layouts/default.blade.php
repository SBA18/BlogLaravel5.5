
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="../../../../favicon.ico">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/commentbox.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/blog.css') }}" rel="stylesheet"> -->
  </head>

  <body>

    @include('layouts.partials.nav')

    @include('layouts.partials.header')

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          @yield('content')

          @yield('script')

        </div>

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          
          @include('layouts.partials.sidebar')
       
        </div>

      </div><!-- /.row -->
    <hr>
    @include('layouts.partials.footer')
    </div><!-- /.container -->

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>

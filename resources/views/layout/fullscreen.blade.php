<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>K&C - @yield('title')</title>
    @yield('seo')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <script src="{{ URL::asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ URL::asset('js/vimeo-thumb.js') }}"></script>
    <div class="wrapper clearfix">
       @yield('content')
    </div>
</body>
@yield('scripts')
</html>

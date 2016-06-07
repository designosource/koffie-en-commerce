<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>K&C - @yield('title')</title>
    @yield('seo')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layout.favicon')
</head>

<body class="user-body">

<script src="{{ URL::asset('js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ URL::asset('js/vimeo-thumb.js') }}"></script>

@include('layout.nav')
<div class="wrapper">
    @yield('content')
    @include('layout.footer')
</div>
<script>
    function openNav() {
        $("#myNav").css( "height", "100vh" );
        $('body').on({
            'mousewheel': function(e) {
                if (e.target.id == 'el') return;
                e.preventDefault();
                e.stopPropagation();
            }
        });
    }

    function closeNav() {
        $("#myNav").css( "height", "0vh" );
                $('body').on({
                'mousewheel': function(e) {
                    if (e.target.id == 'el') return;
                    // e.preventDefault();
                    e.startPropagation();
                }
        });
    }
</script>

</body>

@yield('scripts')
</html>

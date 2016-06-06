<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>K&C - @yield('title')</title>
    @yield('seo')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layout.favicon')
</head>

<body class="admin-body">

<script src="{{ URL::asset('js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ URL::asset('js/vimeo-thumb.js') }}"></script>
    @include('layout.adminNav')
    <div class="container-fluid admin-nav-compensation">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="/admin/videos">Video overzicht</a></li>
                    <li><a href="/admin/videos/create">Nieuwe video</a></li>
                    <li><a href="/admin/categorieen">Categorieën overzicht</a></li>
                    <li><a href="/admin/categorieen/create">Nieuwe categorie</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                @yield('content')
            </div>
        </div>
    </div>
</body>

@yield('scripts')
</html>

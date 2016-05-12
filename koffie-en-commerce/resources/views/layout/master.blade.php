<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>K&C - @yield('title')</title>
	@yield('seo')
	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<body>
    @include('layout.nav')
	@yield('content')
    @include('layout.footer')
</body>
@yield('scripts')
</html>
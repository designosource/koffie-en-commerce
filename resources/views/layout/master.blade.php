<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>K&C - @yield('title')</title>
	@yield('seo')
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
	@include('layout.nav')
	<div class="wrapper">
	@yield('content')
    @include('layout.footer')
	</div>
</body>
@yield('scripts')
</html>

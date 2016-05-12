<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>K&C - @yield('title')</title>
	@yield('seo')
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
	@yield('content')
</body>
@yield('scripts')
</html>
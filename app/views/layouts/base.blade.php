<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>JomOutdoor.com</title>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	@yield('stylesheets')
	{{ HTML::style('css/main.css'); }}

	<!-- Core Javascripts -->
	{{ HTML::script('js/vendor/jquery.js'); }}	
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	@yield('content')

	<!-- JavaScripts -->
	@yield('scripts')
	{{ HTML::script('js/app.js'); }}
</body>
</html>

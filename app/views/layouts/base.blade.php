<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jom Outdoor</title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	@yield('stylesheets')
</head>
<body>
	@yield('content')

	{{ HTML::script('js/vendor/jquery.js'); }}	
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	{{ HTML::script('js/app.js'); }}
	@yield('scripts')
</body>
</html>

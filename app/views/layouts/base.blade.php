<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jom Outdoor</title>
	{{ HTML::style('css/normalize.css'); }}
	{{ HTML::style('css/foundation.css'); }}
	{{ HTML::style('css/slick.css'); }}
	{{ HTML::style('css/app.css'); }}
	@yield('head')
</head>
<body>
	<div class="main">
		@yield('main')
	</div>
	<div class='scripts'>
		{{ HTML::script('js/vendor/modernizr.js'); }}
		{{ HTML::script('js/vendor/jquery.js'); }}
		{{ HTML::script('js/vendor/jquery.cookie.js'); }}
		{{ HTML::script('js/vendor/fastclick.js'); }}
		{{ HTML::script('js/vendor/placeholder.js'); }}
		{{ HTML::script('js/vendor/slick.min.js'); }}
		{{ HTML::script('js/foundation/foundation.js'); }}
		{{ HTML::script('js/foundation/foundation.dropdown.js'); }}
		{{ HTML::script('js/foundation/foundation.topbar.js'); }}
		{{ HTML::script('js/app.js'); }}
		@yield('scripts')
	</div>
</body>
</html>

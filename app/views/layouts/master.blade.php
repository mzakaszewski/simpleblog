<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
	<title> @yield('title') </title>

	<!-- Stylesheets -->
	<link media="all" type="text/css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">	
	{{ HTML::style('assets/css/main.css') }}	
	
</head>
<body>

@include('layouts/partials/navigation')

@yield('content')
		
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
@yield('scripts')

@yield('styles')

</body>
</html>
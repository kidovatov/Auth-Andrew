<!doctype html>
<html>
	<head> <title> Authentication App </title> 
	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('css/main.css') }}
	</head>
	<body>
	<div class = "navbar navbar-fixed-top">
		<div class = "navbar-inner">
			<div class = "col-md-2">
				<ul class = "nav">
				@if(!Auth::check())
					<li> {{ HTML::link('users/register', 'Register') }} </li>
					<li> {{ HTML::link('users/login', 'Login') }} </li>
				@else
					<li> {{ HTML::link('users/logout', 'logout') }} </li>
				@endif
				</ul>
			</div>
		</div>
	</div>
	
	<div class = "container">
		@if(Session::has('message'))
			<p class = "alert"> {{ Session::get('message') }} </p>
		@endif
		
		{{ $content }}
	</div>
	</body>
</html>
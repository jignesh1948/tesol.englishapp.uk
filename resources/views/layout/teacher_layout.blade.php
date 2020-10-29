<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Imperial English UK">
		<meta name="keywords" content="Imperial English UK">
		<meta name="author" content="Imperial English UK">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<title>TESOL</title>

		<link rel="stylesheet" href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.0.css') }}">  
		<link rel="stylesheet" href="{{ asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">  
		<link rel="stylesheet" href="{{ asset('css/teacher/app.min.css') }}">  
		<link rel="stylesheet" href="{{ asset('css/teacher/custom.css') }}">  
		<link rel="stylesheet" href="{{ asset('css/teacher/ninja-slider.css') }}">  
		<link rel="stylesheet" href="{{ asset('css/teacher/thumbnail-slider.css') }}">  
		<link rel="stylesheet" href="{{ asset('fonts/teacher/MyraidPRO/font-style.css') }}">  
		@yield('style')

	</head>
	<body data-ma-theme="heavy-light-blue">
		 <?php $url = env('APP_URL'); ?>
		 <main class="main">
			<aside class="sidebar">
				<div class="menu_logo">
					<img class="menu_top_logo" src="/images/teacher/header-logo/IEUK-logo.png" alt="logo left">
				</div>
				<div class="scrollbar-inner">
					<ul class="navigation">
						<li class="{{ (Request::is('teacher/dashboard') ? 'navigation__active' : '') }}"><a href="dashboard">Home</a></li>
						<li class="{{ (Request::is('teacher/profile') ? 'navigation__active' : '') }}"><a href="profile">Profile</a></li>
						<li class="{{ (Request::is('teacher/work-record') ? 'navigation__active' : '') }}"><a href="work-record">Work Record</a></li>
						<li class="{{ (Request::is('teacher/feedback') ? 'navigation__active' : '') }}"><a href="feedback">Feedback</a></li>
						<li><a id="logout">Logout</a></li>
					</ul>
				</div>
			</aside>

		@yield('content')
		<script type="text/javascript">
			window.url = "{{$url}}";
		</script>
		<script type="text/javascript" src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendors/bower_components/tether/dist/js/tether.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendors/bower_components/Waves/dist/waves.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>

		<script type="text/javascript" src="{{ asset('js/teacher/app.min.js') }}"></script>
		@yield('scripts')
		
		<script type="text/javascript">
			$('#logout').click(function(){
				$.ajax({
					url: url + "/logout",
					type: 'post',
					dataType: 'json',
					contentType: 'application/json',
					success: function (data) {
					   location.href = "/";
					},
					headers: {
					    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
			});
		</script>

	</body>
</html>

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta name="description" content="bootstrap admin template">
		<meta name="author" content="">
		@include('pages.includes.sections.links')
		<title>Rents/Property Manager | @yield('title')</title>
	</head>

	<body class="dashboard site-navbar-small">
		@include('pages.includes.sections.header')
		@include('pages.includes.sections.top_nav')
		@yield('content')
		@include('pages.includes.sections.footer')  
		@include('pages.includes.sections.script')
	</body>
</html>

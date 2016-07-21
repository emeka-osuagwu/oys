<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap admin template">
	<meta name="author" content="">

	<title> Oyster | @yield('title')</title>

	<link rel="apple-touch-icon" href="{!! load_asset('assets/images/apple-touch-icon.png') !!}">
	<link rel="shortcut icon" href="{!! load_asset('assets/images/favicon.ico') !!}">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{!! load_asset('global/css/bootstrap.min3f0d.css?v2.2.0') !!}">
	<link rel="stylesheet" href="{!! load_asset('global/css/bootstrap-extend.min3f0d.css?v2.2.0') !!}">
	<link rel="stylesheet" href="{!! load_asset('assets/css/site.min3f0d.css?v2.2.0') !!}">

	<!-- Plugins -->
	<link rel="stylesheet" href="{!! load_asset('global/vendor/animsition/animsition.min3f0d.css?v2.2.0') !!}">
	<link rel="stylesheet" href="{!! load_asset('global/vendor/asscrollable/asScrollable.min3f0d.css?v2.2.0') !!}">
	<link rel="stylesheet" href="{!! load_asset('global/vendor/switchery/switchery.min3f0d.css?v2.2.0') !!}">
	<link rel="stylesheet" href="{!! load_asset('global/vendor/intro-js/introjs.min3f0d.css?v2.2.0') !!}">
	<link rel="stylesheet" href="{!! load_asset('global/vendor/slidepanel/slidePanel.min3f0d.css?v2.2.0') !!}">
	<link rel="stylesheet" href="{!! load_asset('global/vendor/flag-icon-css/flag-icon.min3f0d.css?v2.2.0') !!}">

	<!-- Page -->
	<link rel="stylesheet" href="{!! load_asset('assets/examples/css/pages/login.min3f0d.css?v2.2.0') !!}">

	<!-- Fonts -->
	<link rel="stylesheet" href="{!! load_asset('global/fonts/web-icons/web-icons.min3f0d.css?v2.2.0') !!}">
	<link rel="stylesheet" href="{!! load_asset('global/fonts/brand-icons/brand-icons.min3f0d.css?v2.2.0') !!}">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

	<!-- Scripts -->
	<script src="{!! load_asset('global/vendor/modernizr/modernizr.min.js') !!}"></script>
	<script src="{!! load_asset('global/vendor/breakpoints/breakpoints.min.js') !!}"></script>
	<script>Breakpoints();</script>
</head>
<body class="page-login layout-full page-dark">
  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">>
	<div class="page-content vertical-align-middle">
	  
	  <div class="brand">
		<img class="brand-img" src="{!! load_asset('logo.png') !!}" alt="..." style="width:350px">

	  </div>
	  @yield('content')

	  <footer class="page-copyright page-copyright-inverse">
		<p>WEBSITE CRAFTED BY <a href="http://nerve.com.ng">NERVE IT</a></p>
		<p>© {{Date('Y') !!}. All RIGHTS RESERVED.</p>
		<div class="social">
		  <a href="javascript:void(0)">
			<i class="icon bd-twitter" aria-hidden="true"></i>
		  </a>
		  <a href="javascript:void(0)">
			<i class="icon bd-facebook" aria-hidden="true"></i>
		  </a>
		  <a href="javascript:void(0)">
			<i class="icon bd-dribbble" aria-hidden="true"></i>
		  </a>
		</div>
	  </footer>
	</div>
  </div>

  <!-- End Page -->


  <!-- Core  -->
  <script src="{!! load_asset('global/vendor/jquery/jquery.min.js') !!}"></script>
  <script src="{!! load_asset('global/vendor/bootstrap/bootstrap.min.js') !!}"></script>
  <script src="{!! load_asset('global/vendor/animsition/animsition.min.js') !!}"></script>
  <script src="{!! load_asset('global/vendor/asscroll/jquery-asScroll.min.js') !!}"></script>
  <script src="{!! load_asset('global/vendor/mousewheel/jquery.mousewheel.min.js') !!}"></script>
  <script src="{!! load_asset('global/vendor/asscrollable/jquery.asScrollable.all.min.js') !!}"></script>
  <script src="{!! load_asset('global/vendor/ashoverscroll/jquery-asHoverScroll.min.js') !!}"></script>

  <!-- Plugins -->
  <script src="{!! load_asset('global/vendor/switchery/switchery.min.js') !!}"></script>
  <script src="{!! load_asset('global/vendor/intro-js/intro.min.js') !!}"></script>
  <script src="{!! load_asset('global/vendor/screenfull/screenfull.min.js') !!}"></script>
  <script src="{!! load_asset('global/vendor/slidepanel/jquery-slidePanel.min.js') !!}"></script>

  <!-- Plugins For This Page -->
  <script src="{!! load_asset('global/vendor/jquery-placeholder/jquery.placeholder.min.js') !!}"></script>

  <!-- Scripts -->
  <script src="{!! load_asset('global/js/core.min.js') !!}"></script>
  <script src="{!! load_asset('assets/js/site.min.js') !!}"></script>

  <script src="{!! load_asset('assets/js/sections/menu.min.js') !!}"></script>
  <script src="{!! load_asset('assets/js/sections/menubar.min.js') !!}"></script>
  <script src="{!! load_asset('assets/js/sections/sidebar.min.js') !!}"></script>

  <script src="{!! load_asset('global/js/configs/config-colors.min.js') !!}"></script>
  <script src="{!! load_asset('assets/js/configs/config-tour.min.js') !!}"></script>

  <script src="{!! load_asset('global/js/components/asscrollable.min.js') !!}"></script>
  <script src="{!! load_asset('global/js/components/animsition.min.js') !!}"></script>
  <script src="{!! load_asset('global/js/components/slidepanel.min.js') !!}"></script>
  <script src="{!! load_asset('global/js/components/switchery.min.js') !!}"></script>

  <script src="{!! load_asset('global/js/components/jquery-placeholder.min.js') !!}"></script>


  <script>
	(function(document, window, $) {
	  'use strict';
	  var Site = window.Site;
	  $(document).ready(function() {
		Site.run();
	  });
	})(document, window, jQuery);
  </script>


  <!-- Google Analytics -->

</body>


</html>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/topicon/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 May 2016 14:43:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>{{$title}} | Oyster</title>

  <link rel="apple-touch-icon" href="{{URL::asset('assets/images/apple-touch-icon.png')}}">
  <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{URL::asset('global/css/bootstrap.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="{{URL::asset('global/css/bootstrap-extend.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/site.min3f0d.css?v2.2.0')}}">

  <!-- Skin tools (demo site only) -->
  <link rel="stylesheet" href="{{URL::asset('global/css/skintools.min3f0d.css?v2.2.0')}}">
  <script src="{{URL::asset('assets/js/sections/skintools.min.js')}}"></script>

  <!-- Plugins -->
  <link rel="stylesheet" href="{{URL::asset('global/vendor/animsition/animsition.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="{{URL::asset('global/vendor/asscrollable/asScrollable.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="{{URL::asset('global/vendor/switchery/switchery.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="{{URL::asset('global/vendor/intro-js/introjs.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="{{URL::asset('global/vendor/slidepanel/slidePanel.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="{{URL::asset('global/vendor/flag-icon-css/flag-icon.min3f0d.css?v2.2.0')}}">

  <!-- Page -->
  <link rel="stylesheet" href="{{URL::asset('assets/examples/css/pages/login.min3f0d.css?v2.2.0')}}">

  <!-- Fonts -->
  <link rel="stylesheet" href="{{URL::asset('global/fonts/web-icons/web-icons.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="{{URL::asset('global/fonts/brand-icons/brand-icons.min3f0d.css?v2.2.0')}}">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="{{URL::asset('global/vendor/html5shiv/html5shiv.min.js')}}"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="{{URL::asset('global/vendor/media-match/media.match.min.js')}}"></script>
    <script src="{{URL::asset('global/vendor/respond/respond.min.js')}}"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="{{URL::asset('global/vendor/modernizr/modernizr.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/breakpoints/breakpoints.min.js')}}"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-login layout-full page-dark">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


  <!-- Page -->
  <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
  data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      @include('flash')
      <div class="brand">
        <img class="brand-img" src="{{URL::asset('logo.png')}}" alt="..." style="width:350px">

      </div>
      @yield('content')
      <p>
        <a href="{{url('auth/social/facebook')}}" class="btn btn-info" style="background-color:#244493; border-color:#244493;">FACEBOOK SIGN IN</a>
        <a href="{{url('auth/social/google')}}" class="btn btn-warning" style="background-color:red;">GOOGLE SIGN IN</a>
      </p>

      <footer class="page-copyright page-copyright-inverse">
        <p>WEBSITE CRAFTED BY <a href="http://nerve.com.ng">NERVE IT</a></p>
        <p>© {{Date('Y')}}. All RIGHTS RESERVED.</p>
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
  <script src="{{URL::asset('global/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/animsition/animsition.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/asscroll/jquery-asScroll.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/mousewheel/jquery.mousewheel.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/asscrollable/jquery.asScrollable.all.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/ashoverscroll/jquery-asHoverScroll.min.js')}}"></script>

  <!-- Plugins -->
  <script src="{{URL::asset('global/vendor/switchery/switchery.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/intro-js/intro.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/screenfull/screenfull.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/slidepanel/jquery-slidePanel.min.js')}}"></script>

  <!-- Plugins For This Page -->
  <script src="{{URL::asset('global/vendor/jquery-placeholder/jquery.placeholder.min.js')}}"></script>

  <!-- Scripts -->
  <script src="{{URL::asset('global/js/core.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/site.min.js')}}"></script>

  <script src="{{URL::asset('assets/js/sections/menu.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/sections/menubar.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/sections/sidebar.min.js')}}"></script>

  <script src="{{URL::asset('global/js/configs/config-colors.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/configs/config-tour.min.js')}}"></script>

  <script src="{{URL::asset('global/js/components/asscrollable.min.js')}}"></script>
  <script src="{{URL::asset('global/js/components/animsition.min.js')}}"></script>
  <script src="{{URL::asset('global/js/components/slidepanel.min.js')}}"></script>
  <script src="{{URL::asset('global/js/components/switchery.min.js')}}"></script>

  <script src="{{URL::asset('global/js/components/jquery-placeholder.min.js')}}"></script>


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

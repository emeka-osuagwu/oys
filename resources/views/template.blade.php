<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/topicon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 May 2016 13:26:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Rents/Property Manager | Oyster</title>

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

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="{{URL::asset('global/vendor/chartist-js/chartist.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="{{URL::asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="{{URL::asset('global/vendor/aspieprogress/asPieProgress.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="{{URL::asset('global/vendor/jquery-selective/jquery-selective.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="{{URL::asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.min3f0d.css?v2.2.0')}}">

  <!-- Page -->
  <link rel="stylesheet" href="{{URL::asset('assets/examples/css/dashboard/team.min3f0d.css?v2.2.0')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="{{URL::asset('global/vendor/formvalidation/formValidation.min3f0d.css?v2.2.0')}}">

  <!-- Page -->
  <link rel="stylesheet" href="{{URL::asset('assets/examples/css/forms/validation.min3f0d.css?v2.2.0')}}">
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

<body class="dashboard site-navbar-small">
  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided" data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <a class="navbar-brand navbar-brand-center" href="index.html">
        <img class="navbar-brand-logo navbar-brand-logo-normal" src="{{URL::asset('logo.png')}}" title="Remark">
        <img class="navbar-brand-logo navbar-brand-logo-special" src="{{URL::asset('logo.png')}}" title="Remark">
        <span class="navbar-brand-text hidden-xs"> Remark</span>
      </a>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search" data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">

          <li class="dropdown dropdown-fw dropdown-mega">
            <a href="#" aria-expanded="false" data-animation="fade" role="button"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;OYSTER HOME</a>

          </li>
          <li class="dropdown dropdown-fw dropdown-mega">
            <a href="#" aria-expanded="false" data-animation="fade" role="button"><i class="fa fa-calendar-minus-o" aria-hidden="true"></i>&nbsp;RENT MANAGER</a>

          </li>

          <li class="dropdown dropdown-fw dropdown-mega">
            <a href="#" aria-expanded="false" data-animation="fade" role="button"><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;BUILDING PROJECT MANAGER</a>

          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        @if(Auth::check())
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">

                  Hi {{Auth::user()->name}}
                <i class="fa fa-caret-down" aria-hidden="true"></i>

            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="{{URL::to('profile')}}" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="{{URL::to('logout')}}" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false" data-animation="scale-up" role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
              <span class="badge badge-danger up">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>NOTIFICATIONS</h5>
                <span class="label label-round label-danger">New 5</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">

                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Message received</h6>
                          <time class="media-meta" datetime="2016-06-10T12:34:48+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                  All notifications
                </a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false" data-animation="scale-up" role="button">
              <i class="icon wb-envelope" aria-hidden="true"></i>
              <span class="badge badge-info up">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>MESSAGES</h5>
                <span class="label label-round label-info">New 3</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="{{URL::asset('global/portraits/5.jpg')}}" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Edward Fletcher</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-15T20:34:48+08:00">3 days ago</time>
                          </div>
                          <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                  See all messages
                </a>
              </li>
            </ul>
          </li>

        </ul>
        <!-- End Navbar Toolbar Right -->
        @else
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

          <li class="dropdown">
            <a class="navbar-avatar"  href="{{URL::to('login')}}" aria-expanded="false" data-animation="scale-up" role="button">
            <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;LOGIN

            </a>
          </li>
          <li class="dropdown">
            <a class="navbar-avatar"  href="{{URL::to('register')}}" aria-expanded="false" data-animation="scale-up" role="button">
            <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;SIGN UP

            </a>
          </li>

        </ul>
        <!-- End Navbar Toolbar Right -->
        @endif
      </div>
      <!-- End Navbar Collapse -->


    </div>
  </nav>
  <div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-item">
              <a href="{{URL::to('/')}}" data-dropdown-toggle="false">
                <i class="site-menu-icon fa fa-tachometer fa-2x" aria-hidden="true"></i>
                <span class="site-menu-title">MY DASHBOARD</span>
                <span class="site-menu-arrow"></span>
              </a>
            </li>

            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">MY PROPERTIES</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{URL::to('/properties')}}">
                    <span class="site-menu-title">MY PROPERTIES</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{URL::to('/properties/create')}}">
                    <span class="site-menu-title">NEW PROPERTY</span>
                  </a>
                </li>


              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon fa fa-building-o fa-2x" aria-hidden="true"></i>
                <span class="site-menu-title">MY LETS</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{URL::to('/rents')}}">
                    <span class="site-menu-title">MY LETS</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{URL::to('/rents/create')}}">
                    <span class="site-menu-title">NEW LET</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-dropdown-toggle="false">
                <i class="site-menu-icon fa fa-briefcase fa-2x" aria-hidden="true"></i>
                <span class="site-menu-title">MY SAVINGS</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{URL::to('/savings')}}">
                    <span class="site-menu-title">Savings</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{URL::to('/savings/history')}}">
                    <span class="site-menu-title">Savings History</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="{{URL::to('/cashout/history')}}">
                    <span class="site-menu-title">Cashout History</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="{{URL::to('/earnings')}}">
                <i class="site-menu-icon fa fa-money fa-2x" aria-hidden="true"></i>
                <span class="site-menu-title">MY EARNINGS</span>
                <span class="site-menu-arrow"></span>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </div>

  @include('flash')
  @yield('content')


  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© {{Date('Y')}}. All RIGHTS RESERVED.</div>
    <div class="site-footer-right">
      WEBSITE CRAFTED BY <a href="http://nerve.com.ng">NERVE IT</a>
    </div>
  </footer>
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
  <script src="{{URL::asset('global/vendor/chartist-js/chartist.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/aspieprogress/jquery-asPieProgress.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/jquery-selective/jquery-selective.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

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

  <script src="{{URL::asset('global/js/components/matchheight.min.js')}}"></script>
  <script src="{{URL::asset('global/js/components/aspieprogress.min.js')}}"></script>
  <script src="{{URL::asset('global/js/components/bootstrap-datepicker.min.js')}}"></script>


  <script src="{{URL::asset('assets/examples/js/dashboard/team.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/bootstrap-select/bootstrap-select.min.js')}}"></script>
  <script src="{{URL::asset('global/js/components/bootstrap-select.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/formvalidation/formValidation.min.js')}}"></script>
  <script src="{{URL::asset('global/vendor/formvalidation/framework/bootstrap.min.js')}}"></script>

  <script src="{{URL::asset('assets/examples/js/forms/validation.min.js')}}"></script>

  <script src="{{URL::asset('assets/examples/js/forms/advanced.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('global/js/jquery.number.min.js') }}"></script>
  <script type="text/javascript">
  $(document).ready(function($) {
    $('.formatt').number( true, 2 );
  });
  </script>


  <!-- Google Analytics -->

</body>


</html>

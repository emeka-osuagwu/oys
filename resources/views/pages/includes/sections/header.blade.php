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

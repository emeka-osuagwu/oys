
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
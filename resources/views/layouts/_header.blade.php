<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
{{--      <li class="nav-item dropdown">--}}
{{--        <a class="nav-link" data-toggle="dropdown" href="#">--}}
{{--          <i class="far fa-comments"></i>--}}
{{--          <span class="badge badge-danger navbar-badge">3</span>--}}
{{--        </a>--}}
{{--        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--          <a href="#" class="dropdown-item">--}}
{{--            <!-- Message Start -->--}}
{{--            <div class="media">--}}
{{--              <img src="img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
{{--              <div class="media-body">--}}
{{--                <h3 class="dropdown-item-title">--}}
{{--                  Brad Diesel--}}
{{--                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>--}}
{{--                </h3>--}}
{{--                <p class="text-sm">Call me whenever you can...</p>--}}
{{--                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--            <!-- Message End -->--}}
{{--          </a>--}}
{{--          <div class="dropdown-divider"></div>--}}
{{--          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>--}}
{{--        </div>--}}
{{--      </li>--}}
{{--      <!-- Notifications Dropdown Menu -->--}}
{{--      <li class="nav-item dropdown">--}}
{{--        <a class="nav-link" data-toggle="dropdown" href="#">--}}
{{--          <i class="far fa-bell"></i>--}}
{{--          <span class="badge badge-warning navbar-badge">15</span>--}}
{{--        </a>--}}
{{--        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--          <span class="dropdown-item dropdown-header">15 Notifications</span>--}}
{{--          <div class="dropdown-divider"></div>--}}
{{--          <a href="#" class="dropdown-item">--}}
{{--            <i class="fas fa-envelope mr-2"></i> 4 new messages--}}
{{--            <span class="float-right text-muted text-sm">3 mins</span>--}}
{{--          </a>--}}
{{--          <div class="dropdown-divider"></div>--}}
{{--          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
{{--        </div>--}}
{{--      </li>--}}
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" width="20">
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
              <span class="dropdown-item dropdown-header">{{ Auth::user()->name }}</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">
                  <i class="fa fa-user mr-2"></i>
                  {{ __('Profile') }}
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item dropdown-footer" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                  <i class="fa fa-lock mr-2"></i>
                  {{ __('Logout') }}
              </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
      </li>
    </ul>
  </nav>

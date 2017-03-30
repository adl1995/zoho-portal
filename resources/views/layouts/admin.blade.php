<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KDG Zoho Admin Panel | Client: {Client Name}</title>
    <!-- ================= Favicon ================== -->
      <link rel="shortcut icon" href="images/favicon.ico">
      <link rel="apple-touch-icon" href="images/favicon.ico">
  <!-- Styles -->
    <link href="{{ asset('css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/mmc-chat.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/lobipanel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/unix.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
<body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
					          <li class="active"><a href="admin_dashboard.html"><i class="ti-user"></i>Clients</a></li>
                    <li><a href="admin_errors.html"><i class="ti-alert"></i>Errors <span class="label label-danger">6 NEW</span><span class="badge">6</span></a></li>
                </ul>
            </div>
        </div>
    </div><!-- /# sidebar -->
    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" /><span>Zoho Admin Panel</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <div class="pull-right p-r-15">
            <ul>
              <li class="header-icon dib"><span class="user-avatar"><span class="hidden-xs">{{ Auth::user()->first_name }}</span><span class="hidden-sm hidden-md hidden-lg"><i class="ti-user"></i></span> <i class="ti-angle-down f-s-10"></i></span>
                  <div class="drop-down dropdown-profile">
                      <div class="dropdown-content-body">
                          <ul>
                              <li><a href="#"><i class="ti-settings"></i> <span>Profile</span></a></li>
                              <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                          </ul>
                      </div>
                  </div>
              </li>
            </ul>
        </div>
    </div>
    
    @yield('content')


    <script src="{{ asset('js/lib/jquery.min.js') }}"></script><!-- jquery vendor -->
    <script src="{{ asset('js/lib/jquery.nanoscroller.min.js') }}"></script><!-- nano scroller -->
    <script src="{{ asset('js/lib/sidebar.js') }}"></script><!-- sidebar -->
    <script src="{{ asset('js/lib/bootstrap.min.js') }}"></script><!-- bootstrap -->
    <script src="{{ asset('js/lib/mmc-common.js') }}"></script>
    <script src="{{ asset('js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script><!-- scripit init-->

</body>

</html>

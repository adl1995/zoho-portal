<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'KDG Zoho Admin Panel | API Key') }}</title>
        <!-- ================= Favicon ================== -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/favicon.ico') }}">
        <!-- Styles -->
        <link href="{{ asset('css/lib/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lib/themify-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lib/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lib/unix.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <style type="text/css" media="screen">
         /**
         * Footer Styles
         */
        .footer {
            padding: 1rem;
            background-color: #261b4b;
            text-align: center;
        }   
        </style>
        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body class="bg-primary">
            <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Zoho Portal') }}
                    </a>
                    <a class="navbar-brand" href="#">
                        |
                    </a>
                    <a class="navbar-brand" href="{{ url('/zoho/integrations') }}">
                        Integrations
                    </a>
                    @if (isset(Auth::user()->is_admin))
                        @if (Auth::user()->is_admin == 1)
                        <a class="navbar-brand" href="#">
                            |
                        </a>
                        <a class="navbar-brand" href="{{ url('/admin/clients') }}">
                            List clients
                        </a>
                        @endif
                    @endif
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @if (isset($error))
            <div class="text-center">
            <div class="text-info">
                <h3>{{ $error }}</h13
            </div>
            </div>
        @endif

        <div class="unix-login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="/"><img alt="KDG" src="images/logo.png"><span>Zoho Admin Portal</span></a>
                            </div>
        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br/><br/><br/>
    <footer class="footer navbar-fixed-bottom">@Zoho Portal - 2017</footer>    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

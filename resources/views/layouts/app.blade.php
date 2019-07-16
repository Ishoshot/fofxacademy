<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{--  <link rel="stylesheet" href="{{ assets('assets/css/maincon.css') }}">  --}}
    <script src="{{ asset('vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    {{--  <script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>  --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.js') }}"></script>
</head>
<body>
    <div id="app">
            <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>                    
                
                 <a class="mt-3 name navbar-brand"  href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                 <p class="navbar-brand hidden">O</p>
            
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#"> <i class="menu-icon fa fa-dashboard"></i>DASHBOARD </a>
                    </li>

                    <h3 class="menu-title">ACTIVITIES</h3><!-- /.menu-title -->
    
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-file-text"></i>Upload Receipts </a>
                    </li>

                    <li>
                        <a href="#"> <i class="menu-icon fa fa-envelope"></i>Upload Admission Letter </a>
                    </li>

                    <li>
                        <a href="#"> <i class="menu-icon fa fa-print"></i>Upload Course Form </a>
                    </li>

                    <li>
                        <a href="#"> <i class="menu-icon fa fa-certificate"></i>Upload O Level Result </a>
                    </li>

                    <li>
                        <a href="#"> <i class="menu-icon fa fa-envelope"></i>Upload Birth Certificate </a>
                    </li>

                    <li>
                        <a href="#"> <i class="menu-icon fa fa-plus-circle"></i>Upload Medical form </a>
                    </li>

                    <li>
                        <a href="#"> <i class="menu-icon fa fa-file"></i>Upload Oath Form </a>
                    </li>

                    <li>
                        <a href="#"> <i class="menu-icon fa fa-download"></i>Generate Report</a>
                    </li>

                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-wrench"></i>Settings</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="menu-icon fa fa-user"></i><a href="#">View My Profile</a>
                            </li>
                            <li>
                                <i class="menu-icon fa fa-pencil"></i><a href="#">Edit My Profile</a>
                            <li>
                            <li>
                                <i class="menu-icon fa fa-sign-out"></i><a href="#">Log out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

        {{--  <main class="py-4">  --}}
            @yield('content')
        {{--  </main>  --}}
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <link rel="stylesheet" href="{{ asset('css/app.v1.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('js/calendar/bootstrap_calendar.css') }}" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
    <div id="google_translate_element" align="right"></div><script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
    }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
        <section class="vbox">
          <header class="bg-primary header header-md navbar navbar-fixed-top-xs box-shadow">
            <div class="navbar-header aside-md dk"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="{{ url('/home') }}" class="navbar-brand"><img src="images/logo.png" class="m-r-sm">

        </a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a> </div>


            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">

              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/a0.jpg"> </span>

             <b class="caret"></b>     {{ Auth::user()->name }}</a>
                <ul class="dropdown-menu animated fadeInRight">
                  <span class="arrow top"></span>

                  <li> <a href="profile.php">Profile</a> </li>
                  <li> <a href="contact.php">Help</a> </li>
                  <li class="divider"></li>
                  <li>   <a  href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> </li>
                </ul>
              </li>
            </ul>
          </header>
          <section>
            <section class="hbox stretch">
              <!-- .aside -->
              <aside class="bg-light aside-md hidden-print" id="nav">
                <section class="vbox">
                  <section class="w-f scrollable">
                    <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-color="#333333">
                      <div class="clearfix wrapper dk nav-user hidden-xs">
                        <div class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb avatar pull-left m-r"> <img src="images/a0.jpg"> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt">
              {{ Auth::user()->name }}
           </strong> <b class="caret"></b> </span> <span class="text-muted text-xs block"></span> </span> </a>
                          <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <span class="arrow top hidden-nav-xs"></span>

                            <li> <a href="profile.php">Profile</a> </li>
                            <li> <a href="contact.php">Help</a> </li>
                            <li class="divider"></li>
                            <li>   <a data-toggle="ajaxModal" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>  </li>
                          </ul>
                        </div>
                      </div>
                      <!-- nav -->
                      <nav class="nav-primary hidden-xs">
                        <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                        <ul class="nav nav-main" data-ride="collapse">
                          <li class="active"> <a href="{{ url('/home') }}" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Dashboard</span> </a> </li>

                          {{-- <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-lab icon"> </i> <span class="font-bold">Account</span> </a>
                            <ul class="nav dk">
                              <li > <a href="{{ url('/downline') }}" class="auto"> <i class="i i-dot"></i> <span>Downline/Earnings</span> </a> </li>



                              <li > <a href="invoice.php" class="auto"> <i class="i i-dot"></i> <span>Invoice/Account Status</span> </a> </li>
                              <li> <a href="paymentshistory.php" class="auto"> <i class="i i-dot"></i> <span>Payments History</span> </a> </li>
                            </ul>
                          </li> --}}

                          <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-grid2 icon"> </i> <span class="font-bold">Help</span> </a>
                            <ul class="nav dk">
                              {{-- <li > <a href="notifications.php" class="auto"><i class="i i-dot"></i> <span>Notifications</span> </a> </li> --}}
                              <li > <a href="contact.php" class="auto"> <i class="i i-dot"></i> <span>Contact</span> </a> </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="line dk hidden-nav-xs"></div>


                      </nav>
                      <!-- / nav -->
                    </div>
                  </section>
                  <footer class="footer hidden-xs no-padder text-center-nav-xs">
                 <a href="{{ route('logout') }}"  data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       <i class="i i-logout"></i> </a>  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form> <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a> </footer>
                </section>
              </aside>
              <!-- /.aside -->

            @yield('content')











</section>
    </div>
    <!-- Bootstrap -->
    <!-- App -->
    <script src="{{ asset('js/app.v1.js')}}"></script>
    <script src="{{ asset('js/charts/easypiechart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{ asset('js/charts/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('js/charts/flot/jquery.flot.min.js')}}"></script>
    <script src="{{ asset('js/charts/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{ asset('js/charts/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{ asset('js/charts/flot/jquery.flot.pie.min.js')}}"></script>
    <script src="{{ asset('js/charts/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('js/charts/flot/jquery.flot.grow.js')}}"></script>
    <script src="{{ asset('js/charts/flot/demo.js')}}"></script>
    <script src="{{ asset('js/calendar/bootstrap_calendar.js')}}"></script>
    <script src="{{ asset('js/calendar/demo.js')}}"></script>
    <script src="{{ asset('js/sortable/jquery.sortable.js')}}"></script>
      <script src="{{ asset('js/jquery.ui.touch-punch.min.js')}}"></script>
      <script src="{{ asset('js/jquery-ui-1.10.3.custom.min.js')}}"></script>
    <script src="{{ asset('js/app.plugin.js')}}"></script>
    </body>
    </html>

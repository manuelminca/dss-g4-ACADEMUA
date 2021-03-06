<!-- /resources/views/master.blade.php -->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <title>@yield('title') - AcademUA</title>
        <meta name="description" content="">
        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="/css/style.css">
        <!-- Responsiveness -->
        <link rel="stylesheet" href="/css/responsive.css">

        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- FAV & Touch Icons -->
        <link rel="shortcut icon" href="assets/img/icons/favicon.ico">
        <link rel="apple-touch-icon" href="assets/img/icons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/icons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/icons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/icons/apple-touch-icon-144x144.png">
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="assets/js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body id="@yield('homeId')">
        <div id="entire">
            <header id="@yield('headerId')" class="@yield('headerClass')">
                <div class="container" @yield('navbar')> 
                    <div class="logo-container fl clearfix">
                        <a href="/" class="ib">
                            <img src="/img/logo@2x.png" class="fl" alt="Logo">
                            <span class="site-name">AcademUA<span>.</span></span>
                        </a>
                    </div><!-- End Logo Container -->
                    <nav class="main-navigation fr">
                        <ul class="clearfix">
                            <li class="parent-item @yield('homeCurrent')">
                                <a href="/" class="ln-tr">Home</a>
                            </li>
                            <li class="parent-item courses-menu @yield('courseCurrent')">
                                <a href="/courses" class="ln-tr">Courses</a>
                            </li>

                            @if(Auth::check())
                            @if (Auth::user()->checkTeacher())

                            <li class="parent-item courses-menu @yield('newCourseCurrent')">
                                <a href="/courses/new" class="ln-tr">Add course</a>
                            </li>

                            @endif
                            @endif

                            <li class="parent-item @yield('instructorsCurrent')">
                                <a href="/users/instructors" class="ln-tr">Instuctors</a>
                            </li>

                             @if(Auth::check())
                            <li class="parent-item ">
                                <a href="/messages" class="ln-tr">Messages</a>
                            </li>
                             @endif
                            <li class="parent-item  @yield('aboutCurrent')">
                                <a href="/about" class="ln-tr">About</a>
                            </li>
                            <li class="parent-item @yield('contactCurrent')">
                                <a href="/contact" class="ln-tr">Contact</a>
                            </li>
                            


                        @if (Auth::guest())
                            <li class="parent-item login"><a href="{{ route('register') }}" class="ln-tr"><span class="grad-btn">Register</span></a></li>
                            <li class="parent-item login"><a href="{{ route('login') }}" class="ln-tr"><span class="grad-btn">Login</span></a></li>
                           
                        @else
                            <li class="parent-item haschild">
                                <a href="#" class="ln-tr">Hello, {{ Auth::user()->name }} </a>
                                <ul class="submenu">
                                    <li class="sub-item"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Logout</a></li>
                                    <li class="sub-item"><a href="/users/modify" class="ln-tr">Modify user</a></li>
                                    <li class="sub-item"><a href="/users/delete" class="ln-tr">Delete user</a></li>
                                </ul>
                            </li>

                            <li class="parent-item login">
                                

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        
                            
                        @endif
                    






                        </ul>
                    </nav><!-- End NAV Container -->
                    <div class="mobile-navigation fr">
                        <a href="#" class="mobile-btn"><span></span></a>
                        <div class="mobile-container">
                        </div>
                    </div><!-- end mobile navigation -->
                </div>
            </header><!-- End Main Header Container -->

  
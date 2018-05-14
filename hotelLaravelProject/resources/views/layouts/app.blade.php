<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hotel App</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/skins/_all-skins.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <style>

        h4 {
            color: darkgoldenrod;
        }

        .card {
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            background-color: #fafafa;
            margin: 1rem;
            padding: 1rem;
            border: 2px solid #ccc;
            text-align: center;
            margin-right: 5px;
            margin-left: 5px;
            display: inline-block;
        }

        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }


        .centrado {
            background-color: #fafafa;
            margin: 1rem;
            padding: 1rem;
            border: 2px solid #ccc;
            /* IMPORTANTE */
            text-align: left;
        }

        hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 1px;
        }

        .cuadrado{
            padding:5px;
            margin:5px;
            background-color: #000000;
            border: solid 1px red;
            color: white;
        }

        .hotel-item {
            background: blue;
            background-color: #fafafa;
            margin: 1rem;
            padding: 1rem;
            border: 2px solid #ccc;
            /* IMPORTANTE */
            text-align: center;
            margin-right: 5px;
            margin-left: 5px;
            display: inline-block;
        }
        .padre {
            text-align: center;
        }
        a {
            color: darkred;
        }
        span.o-hotel-review__score {
            display: inline-block;
            vertical-align: middle;
            background: #2681FF;
            border-radius: 14px;
            font-family: arial, sans-serif;
            padding: 0 10px;
            font-size: 16px;
            color: #A8CCFF;
            line-height: 1.3;
        }
        .o-price__num {
            color: darkgreen;
            font-size: 22px;
            line-height: 1.1;
            font-weight: bolder;
        }


        .nav-tabs>li>a {
            margin-right: 2px;
            line-height: 1.42857143;
            border: 1px solid transparent;
            border-radius: 4px 4px 0 0;
            background: #337ab7;
        }
        nav.navbar.navbar-static-top {
            margin-left: 300px;
        }
        .btn-group>.btn:first-child {
            margin-left: 0;
            background: #00599c;
            color: white;
        }
    </style>
    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="/home" class="logo">
                <b>Hoteles</b>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-dinamic-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="data:image/png;base64,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"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="data:image/png;base64,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"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {!! Auth::user()->name !!}
                                        <small>Member since {!! Auth::user()->created_at->format('M. Y') !!}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.sidebar')
    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2018 <a href="https://github.com/jefry9508" target="_blank">Jefry Cardona</a>.</strong> All rights reserved.
        </footer>

    </div>


    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/js/app.min.js"></script>

    @yield('scripts')
    </body>
</html>

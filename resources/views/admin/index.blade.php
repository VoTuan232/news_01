<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('bower_components/admin-layout/bower_components/assets_backend/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/admin-layout/bower_components/assets_backend/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/admin-layout/bower_components/assets_backend/dist/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/admin-layout/bower_components/assets_backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/bower_components/Font-Awesome/web-fonts-with-css/css/fontawesome.min.css') }}">
        @yield('stylesheets')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs">{{ Auth::user()->name }}
                                <span class="glyphicon glyphicon-user"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="">
                                        <p>
                                            <small></small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!-- Menu Footer-->
                                    <li class="user-footer col-md-12">
                                        <div class="pull-right">
                                            <a href="{{ route('logout') }}" class="btn btn-primary">{{ trans('language.logout') }}</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">
                            <h4 align="center">{{ trans('language.manager') }}</h4>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fa fa-dashboard"></i>
                            <span>{{ trans('language.home') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('posts.index') }}">
                            <i class="fa fa-files-o"></i>
                            <span>{{ trans('language.post') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fa fa-th"></i>
                            <span>{{ trans('language.category') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('tags.index') }}">
                            <i class="fa fa-pie-chart"></i>
                            <span>{{ trans('language.tag') }}</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('main')
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b></b> 1.1.0
                </div>
                <strong>Copyright &copy; 2018 <a href="https://adminlte.io">Võ Tuấn</a>.</strong>votuanbk232@gmail.com
            </footer>
            <!-- Add the sidebar's background. This div must be placed
                immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <script src="{{ asset('bower_components/admin-layout/bower_components/assets_backend/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('bower_components/admin-layout/bower_components/assets_backend/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bower_components/admin-layout/bower_components/assets_backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('bower_components/admin-layout/bower_components/assets_backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('bower_components/admin-layout/bower_components/assets_backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <script src="{{ asset('bower_components/admin-layout/bower_components/assets_backend/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('bower_components/admin-layout/bower_components/assets_backend/dist/js/demo.js') }}"></script>
        @yield('javascript')
    </body>
</html>


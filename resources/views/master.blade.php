<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-switch.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/checkbox3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flat-blue.css') }}">
</head>
    <body class="flat-blue">
    <div class="app-container">
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active">#DeaDPerSoN</li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hamza Khan <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li class="profile-img">
                                    <img src="{{ asset('img/profile/picjumbo.com_HNCK4153_resize.jpg') }}" class="profile-img">
                                </li>
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username">Hamza Khan</h4>
                                        <p>hamzakhan@gmail.com</p>
                                        <div class="btn-group margin-bottom-2x" role="group">
                                           <form action="{{ url('logout') }}" method="post"> {{ csrf_field() }}
                                           <button type="submit" class="btn btn-default"><i class="fa fa-sign-out"></i> Logout</button>
                                           </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">
                                <div class="icon fa fa-paper-plane"></div>
                                <div class="title">#DeaDPersoN</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="{{ url('users') }}">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-element">
                                    <span class="icon fa fa-desktop"></span><span class="title">UI Kits</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-element" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="ui-kits/theming.html">Theming</a>
                                            </li>
                                            <li><a href="ui-kits/grid.html">Grid</a>
                                            </li>
                                            <li><a href="ui-kits/button.html">Buttons</a>
                                            </li>
                                            <li><a href="ui-kits/card.html">Cards</a>
                                            </li>
                                            <li><a href="ui-kits/list.html">Lists</a>
                                            </li>
                                            <li><a href="ui-kits/modal.html">Modals</a>
                                            </li>
                                            <li><a href="ui-kits/alert.html">Alerts & Toasts</a>
                                            </li>
                                            <li><a href="ui-kits/panel.html">Panels</a>
                                            </li>
                                            <li><a href="ui-kits/loader.html">Loaders</a>
                                            </li>
                                            <li><a href="ui-kits/step.html">Tabs & Steps</a>
                                            </li>
                                            <li><a href="ui-kits/other.html">Other</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-table">
                                    <span class="icon fa fa-table"></span><span class="title">Table</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-table" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="table/table.html">Table</a>
                                            </li>
                                            <li><a href="table/datatable.html">Datatable</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-form">
                                    <span class="icon fa fa-file-text-o"></span><span class="title">Form</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-form" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="form/ui-kits.html">Form UI Kits</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- Dropdown-->
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#component-example">
                                    <span class="icon fa fa-cubes"></span><span class="title">Components</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="component-example" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="components/pricing-table.html">Pricing Table</a>
                                            </li>
                                            <li><a href="components/chartjs.html">Chart.JS</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- Dropdown-->
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-example">
                                    <span class="icon fa fa-slack"></span><span class="title">Page Example</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-example" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="pages/login.html">Login</a>
                                            </li>
                                            <li><a href="pages/index.html">Landing Page</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- Dropdown-->
                            <li class="panel panel-default dropdown">
                                <a data-toggle="collapse" href="#dropdown-icon">
                                    <span class="icon fa fa-archive"></span><span class="title">Icons</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-icon" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="icons/glyphicons.html">Glyphicons</a>
                                            </li>
                                            <li><a href="icons/font-awesome.html">Font Awesomes</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="license.html">
                                    <span class="icon fa fa-thumbs-o-up"></span><span class="title">License</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- Main Content -->
            @yield('content')
        </div>
    <footer class="app-footer">
        <div class="wrapper">
            <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.
        </div>
    </footer>
    <div> 
        <!-- Javascript Libs -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }} "></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }} "></script>
        <script type="text/javascript" src="{{ asset('js/Chart.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap-switch.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/select2.full.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/ace/ace.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/ace/mode-html.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/ace/theme-github.js') }}"></script>
        <!-- Javascript -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
        <!-- <script>
            $('.alert').delay(2000).hide(2000);
        </script> -->
    </body>
</html>

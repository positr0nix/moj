
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <title>Mictlan Judge</title>
    <meta name="description" content="Mictlan Online Judge">
    <meta name="author" content="Mictlan">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link href="{{ asset('css/bootstrap.min-1.2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/oneuimin2.css') }}" rel="stylesheet">

    <link href="{{ asset('js/plugins/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/plugins/select2/select2-bootstrap.css') }}" rel="stylesheet">

</head>

<body>

<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">

    <!-- Sidebar -->
    <nav id="sidebar">
        <!-- Sidebar Scroll Container -->
        <div id="sidebar-scroll">
            <!-- Sidebar Content -->
            <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
            <div class="sidebar-content">

                <!-- Side Content -->
                <div class="side-content">
                    <ul class="nav-main">
                        <li>
                            <a class="active" href="#"><i class="fa fa-terminal"></i><span class="sidebar-mini-hide">Mictlán Online Judge</span></a>
                        </li>
                        <li class="nav-main-heading">
                            <span class="sidebar-mini-hide">Recursos</span></li>
                        <li>
                            <a href="/admin/contest">
                                <i class="si si-trophy"></i><span class="sidebar-mini-hide">Concursos</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/user">
                                <i class="si si-user"></i><span class="sidebar-mini-hide">Usuarios</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/team">
                                <i class="si si-users"></i><span class="sidebar-mini-hide">Equipos</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/problem">
                                <i class="si si-notebook"></i><span class="sidebar-mini-hide">Problemas</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Content -->
            </div>
            <!-- Sidebar Content -->
        </div>
        <!-- END Sidebar Scroll Container -->
    </nav>
    <!-- END Sidebar -->



    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Right -->
        <ul class="nav-header pull-right">
            <li>
                <div class="btn-group">
                    <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                        <img src="{{ asset('img/avatars/user.png') }}" alt="{{ Auth::user()->name }}">
                        <span class="caret"></span>

                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-header">Ajustes</li>
                        <li>
                            <a tabindex="-1" href="base_pages_login.html">
                                <i class="fa fa-user pull-right"></i>Perfil
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" href="/auth/logout">
                                <i class="si si-logout pull-right"></i>Salir
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
        <!-- END Header Navigation Right -->

        <!-- Header Navigation Left -->
        <ul class="nav-header pull-left">
            <li class="hidden-md hidden-lg">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                    <i class="fa fa-navicon"></i>
                </button>
            </li>
            <li class="hidden-xs hidden-sm">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
            </li>

        </ul>
        <!-- END Header Navigation Left -->
    </header>
    <!-- END Header -->


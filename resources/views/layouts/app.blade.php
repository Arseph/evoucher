<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('public/img/doh.png') }}">
    <title>E-VOUCHER SYSTEM</title>
    <!-- This page plugin CSS -->
    <link href="{{ asset('public/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('public/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/dist/customstyle.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body onload="initClock()">
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <div class="navbar-brand">
                        <a href="index.html">
                            <b class="logo-icon">
                                E-VOUCHER SYSTEM
                            </b>
                        </a>
                    </div>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left">
                        <b class="logo-icon">
                            <img src="{{ asset('public/img/doh.png') }}" alt="homepage" style="width: 20%;" />
                        </b>
                    </ul>
                    <div id="timedate">
                        <a id="mon">Jan</a>
                        <a id="d">1</a>,
                        <a id="y">0</a><br />
                        <a id="h">12</a> :
                        <a id="m">00</a>:
                        <a id="s">00</a>
                    </div>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('public/img/profile.png') }}" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark">{{ Auth::user()->fname }} {{ Auth::user()->mname }} {{ Auth::user()->lname }}</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ asset('home')}}"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ asset('voucher')}}"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">My Vouchers
                                </span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="main-view">
                @yield('content')
            </div>
        <footer class="footer text-left text-muted">
            <p class="pull-right">All Rights Reserved {{ date("Y") }} | Version 1.0</p>
        </footer>
        </div>
    </div>
    <script src="{{ asset('public/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="crossorigin="anonymous"></script>
    <script src="https://malsup.github.io/jquery.form.js"></script> 
    <script src="{{ asset('public/assets/libs/jquery/dist/jquery-validate.js') }}"></script>
    <script src="{{ asset('public/assets/libs/jquery/dist/printThis.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('public/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <script src="{{ asset('public/dist/js/app-style-switcher.js')}}"></script>
    <script src="{{ asset('public/dist/js/feather.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('public/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('public/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="{{ asset('public/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('public/dist/js/custom.min.js')}}"></script>
    <!--This page plugins -->
    <script src="{{ asset('public/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('public/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
    @include('scripts.layout')
    @yield('js')
</body>

</html>
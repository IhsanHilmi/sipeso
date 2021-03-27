<!doctype html>
<html class="no-js " lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

        <title>:: Nexa :: Index</title>
        <!-- Favicon-->
        <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('/nexa/plugins/bootstrap/css/bootstrap.min.css')}}">

        <!-- Sweetalert Css -->
        <link href="{{ asset('/nexa/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('/nexa/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}"/>
        <link rel="stylesheet" href="{{ asset('/nexa/plugins/morrisjs/morris.css') }}" />
        
        <!-- JQuery DataTable Css -->
        <link rel="stylesheet" href="{{ asset('/nexa/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">

        <!-- Custom Css -->
        <link rel="stylesheet" href="{{ asset('/nexa/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('/nexa/css/color_skins.css') }}">
    </head>
    <body class="theme-orange">
        @include('components.page-loader')
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div><!-- Search  -->
        <div class="search-bar">
            <div class="search-icon"> <i class="material-icons">search</i> </div>
            <input type="text" placeholder="Explore Nexa...">
            <div class="close-search"> <i class="material-icons">close</i> </div>
        </div>
        @include('components.topbar')
        @include('components.sidebar')
        <!-- Chat-launcher -->
        <div class="chat-launcher"></div>
        <div class="chat-wrapper">
            <div class="card">
                <div class="header">
                    <h2>TL Groups</h2>                    
                </div>
                <div class="body">
                    <div class="chat-widget">
                    <ul class="chat-scroll-list clearfix">
                        <li class="left float-left">
                            <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                            <div class="chat-info">
                                <a class="name" href="javascript:void(0);">Alexander</a>
                                <span class="datetime">6:12</span>                            
                                <span class="message">Hello, John </span>
                            </div>
                        </li>
                        <li class="right">
                            <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                        </li>
                        <li class="right">
                            <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                        </li>
                        <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                            <div class="chat-info"><a class="name" href="javascript:void(0);">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                        </li>
                        <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                            <div class="chat-info"><a class="name" href="javascript:void(0);">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                        </li>
                            <li class="right">
                            <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                        </li>
                    </ul>
                    </div>
                    <div class="input-group">
                        <div class="form-line">
                            <input type="text" class="form-control date" placeholder="Enter your email...">
                        </div>
                        <span class="input-group-addon"> <i class="material-icons">send</i> </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <section class="content home">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Dashboard
                        <small class="text-muted">Welcome to Nexa Application</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Nexa</a></li>
                            <li class="breadcrumb-item active">Dashboard 1</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                @yield('content')
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <p class="m-b-0">© 2017 Nexa Admin by <a href="http://thememakker.com/" target="black">ThemeMakker</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Jquery Core Js --> 
        <script src="{{ asset('/nexa/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 
        <script src="{{ asset('/nexa/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 
        
        <!-- Jquery DataTable Plugin Js --> 
        <script src="{{ asset('/nexa/bundles/datatablescripts.bundle.js') }}"></script>
        <script src="{{ asset('/nexa/plugins/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('/nexa/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('/nexa/plugins/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('/nexa/plugins/jquery-datatable/buttons/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('/nexa/plugins/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('/nexa/plugins/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

        <script src="{{ asset('/nexa/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
        <script src="{{ asset('/nexa/bundles/morrisscripts.bundle.js') }}"></script><!-- Morris Plugin Js -->
        <script src="{{ asset('/nexa/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->
        <script src="{{ asset('/nexa/bundles/knob.bundle.js') }}"></script> <!-- Jquery Knob Plugin Js -->
        
        <script src="{{ asset('/nexa/plugins/sweetalert/sweetalert.min.js') }}"></script> <!-- SweetAlert Plugin Js --> 
        <script src="{{ asset('/nexa/js/pages/ui/dialogs.js') }}"></script> 

        <script src="{{ asset('/nexa/bundles/mainscripts.bundle.js') }}"></script>
        <script src="{{ asset('/nexa/js/pages/tables/jquery-datatable.js') }}"></script>
        <script src="{{ asset('/nexa/js/pages/index.js') }}"></script>
        <script src="{{ asset('/nexa/js/pages/charts/jquery-knob.min.js') }}"></script>
    </body>
</html>
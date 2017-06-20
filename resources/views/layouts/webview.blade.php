<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="theme-color" content="#ffffff">

    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('images/favicons/favicon-96x96.png')}}">
    <title>Unzabeca - @yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('../webview/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Web Fonts -->
    <link href='{{URL::asset('http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300')}}' rel='stylesheet' type='text/css'>
    <!-- Flaticon CSS -->
    <link href="{{URL::asset('../webview/fonts/flaticon/flaticon.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('../webview/css/alumni/style.css')}}" media="screen" />
    <!-- font-awesome CSS -->
    <link href="{{URL::asset('../webview/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- owl.carousel CSS -->
    <link href="{{URL::asset('../webview/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{URL::asset('../webview/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <!-- Offcanvas CSS -->
    <link href="{{URL::asset('../webview/css/hippo-off-canvas.css')}}" rel="stylesheet">
    <!-- animate CSS -->
    <link href="{{URL::asset('../webview/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{URL::asset('../webview/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('../webview/css/alumni/style.css')}}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{URL::asset('../webview/css/responsive.css')}}" rel="stylesheet">

    <script src="{{URL::asset('../webview/js/vendor/modernizr-2.8.1.min.js')}}"></script>
    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="{{URL::asset('../webview/js/vendor/html5shim.js')}}"></script>
    <script src="{{URL::asset('../webview/js/vendor/respond.min.js')}}"></script>
    <!--[endif]-->

    {{--<!-- alumni -->--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>--}}
    {{--<script src="{{URL::asset('../webview/js/vendor/jquery.timelinr-0.9.6.js')}}"></script>--}}
    {{--<script>--}}
        {{--$(function(){--}}
            {{--$().timelinr({--}}
                {{--arrowKeys: 'true'--}}
            {{--})--}}
        {{--});--}}
    {{--</script>--}}



</head>


<body>
<div id="st-container" class="st-container">
    <div class="st-pusher">
        <div class="st-content">
            <div class="st-content-inner">
                <header>
                    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" >
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- offcanvas-trigger-effects -->
                                <h1 class="logo"><a class="navbar-brand" href="/"><span style="color: #f5f5f5; font-size: xx-large"> UNZABECA</span></a></h1>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="{{url('/')}}">Home</a></li>

                                    <li class="dropdown"><a >About <b class="caret"></b></a>
                                        <!-- submenu-wrapper -->
                                        <div class="submenu-wrapper submenu-wrapper-topbottom">
                                            <div class="submenu-inner  submenu-inner-topbottom">
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{url('/webview/committees')}}">Committees</a></li>
                                                    <li><a href="{{url('/webview/executive')}}">Executive</a></li>
                                                    <li><a href="{{url('/webview/general_about')}}">General Information</a></li>
                                                </ul>
                                            </div><!-- /.submenu-inner -->
                                        </div> <!-- /.submenu-wrapper -->
                                    </li>

                                    <li class="dropdown"><a href="#" >Alumni <b class="caret"></b></a>
                                        <!-- submenu-wrapper -->
                                        <div class="submenu-wrapper submenu-wrapper-topbottom">
                                            <div class="submenu-inner  submenu-inner-topbottom">
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{url('webview/executive/alumni/timeline')}}">Executive</a></li>
                                                    <li><a href="{{url('webview/ordinary/alumni/timeline')}}">Members</a></li>
                                                </ul>
                                            </div><!-- /.submenu-inner -->
                                        </div> <!-- /.submenu-wrapper -->
                                    </li>

                                    <li class="dropdown"><a href="#" >Resources <b class="caret"></b></a>
                                        <!-- submenu-wrapper -->
                                        <div class="submenu-wrapper submenu-wrapper-topbottom">
                                            <div class="submenu-inner  submenu-inner-topbottom">
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{url('/webview/actionPlan')}}">Action Plan</a></li>
                                                    <li><a href="{{url('/webview/researchPlan')}}">Research Work</a></li>
                                                    <li><a href="{{url('/webview/article')}}">Articles</a></li>
                                                </ul>
                                            </div><!-- /.submenu-inner -->
                                        </div> <!-- /.submenu-wrapper -->
                                    </li>

                                    <li class="dropdown"><a href="#" >Events<b class="caret"></b></a>
                                        <!-- submenu-wrapper -->
                                        <div class="submenu-wrapper submenu-wrapper-topbottom">
                                            <div class="submenu-inner  submenu-inner-topbottom">
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{url('webview/events/view/1')}}">Upcoming</a></li>
                                                    <li><a href="{{url('webview/events/view/2')}}">today</a></li>
                                                    <li><a href="{{url('webview/events/view/3')}}">Past</a></li>
                                                </ul>
                                            </div><!-- /.submenu-inner -->
                                        </div> <!-- /.submenu-wrapper -->
                                    </li>

                                    <li class="dropdown"><a href="#" >Contact Us<b class="caret"></b></a>
                                        <!-- submenu-wrapper -->
                                        <div class="submenu-wrapper submenu-wrapper-topbottom">
                                            <div class="submenu-inner  submenu-inner-topbottom">
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{url('webview/members/join/form')}}">Join Us</a></li>
                                                    <li><a href="{{url('webview/contactUs')}}">Find Us</a></li>
                                                </ul>
                                            </div><!-- /.submenu-inner -->
                                        </div> <!-- /.submenu-wrapper -->
                                    </li>

                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container -->
                    </nav>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        {{--<img class="center block  pull-right img-circle img-responsive" src="{{ URL::asset('frontend/img/logo.png') }}">--}}
                        <h4 class="page-header">
                            <div class="pull-right"></div>
                            @if(Session::has('flash_message'))
                                <div class="alert alert-success {{session()->has('flash_message_important')? session('flash_message') : ''}}">
                                    {{Session::get('flash_message')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    @if(session()->has('flash_message_important'))

                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    @endif
                                </div>
                            @endif
                        </h4>
                    </div>
                    <!-- /.col-lg-12 -->
                </div><!-- /.row -->

                @yield('content')

                <footer class="footer-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="social-link wow fadeInDown pull-right">
                                    <ul >
                                        <li>
                                            <a href="{{url('https://www.facebook.com/University-of-Zambia-Business-and-Economics-Association-UNZABECA-437974826272696/')}}">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div style="text-align: center" class="copyright wow fadeInDown">

                                    <p>Copyright &copy; 2012-{{date('Y')}}  UNZABECA . All Rights Reserved. Developed by <a href="#">Code4cus</a> </p>

                                </div><!-- /.copyright -->
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </footer>
            </div> <!-- .st-content-inner -->
        </div> <!-- .st-content -->
    </div> <!-- .st-pusher -->


    <!-- ======== OFFCANVAS MENU ========= -->
    <div class="offcanvas-menu offcanvas-effect visible-xs">
        <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
        <h3>Sidebar Menu</h3>
        <div>
            <div>
                <ul>
                    <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>

                    <li><a href="#">About</a>
                        <ul>
                            <li><a href="{{url('/webview/committees')}}"><i class="fa fa-life-ring"></i> Committees</a></li>
                            <li><a href="{{url('/webview/executive')}}"><i class="fa fa-user"></i> Current Executive</a></li>
                            <li><a href="{{url('/webview/general_about')}}"><i class="fa fa-file-o"></i> General Info</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Alumni</a>
                        <ul>
                            <li><a href="{{url('webview/executive/alumni/timeline')}}"><i class="fa fa-pencil-square-o"></i> Executive</a></li>
                            <li><a href="{{url('webview/ordinary/alumni/timeline')}}"><i class="fa fa-pencil"></i> Members</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Resources</a>
                        <ul>
                            <li><a href="{{url('/webview/actionPlan')}}"><i class="fa fa-picture-o"></i> Action Plan</a></li>
                            <li><a href="{{url('/webview/researchPlan')}}"><i class="fa fa-paper-plane-o"></i> Research Plan</a></li>
                            <li><a href="{{url('/webview/article')}}"><i class="fa fa-file-text-o"></i> Articles</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Events</a>
                        <ul class="">
                            <li><a href="{{url('webview/events/view/1')}}">Upcoming</a></li>
                            <li><a href="{{url('webview/events/view/2')}}">today</a></li>
                            <li><a href="{{url('webview/events/view/3')}}">Past</a></li>
                        </ul>

                    </li>

                    <li><a href="#">Contact Us</a>
                        <ul>
                            <li><a href="{{url('webview/members/join/form')}}">Join Us</a></li>
                            <li><a href="{{url('webview/contactUs')}}">Find Us</a></li>`
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div><!-- .offcanvas-menu -->
</div><!-- /st-container -->


<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>


@yield('scripts')
    <!-- jQuery -->
    <script src="{{URL::asset('../webview/js/jquery.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('../webview/js/bootstrap.min.js')}}"></script>
    <!-- wow.min.js -->
    <script src="{{URL::asset('../webview/js/wow.min.js')}}"></script>
    <!-- owl-carousel -->
    <script src="{{URL::asset('../webview/owl-carousel/owl.carousel.min.js')}}"></script>
    <!-- smoothscroll -->
    <script src="{{URL::asset('../webview/js/smoothscroll.js')}}"></script>
    <!-- Offcanvas Menu -->
    <script src="{{URL::asset('../webview/js/hippo-offcanvas.js')}}"></script>
    <!-- easypiechart -->
    <script src="{{URL::asset('../webview/js/jquery.easypiechart.min.js')}}"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="{{URL::asset('../webview/js/jquery.easing.min.js')}}"></script>
    <!-- Magnific-popup -->
    <script src="{{URL::asset('../webview/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Shuffle.min js -->
    <script src="{{URL::asset('../webview/js/jquery.shuffle.min.js')}}"></script>
    <!-- Custom Script -->
    <script src="{{URL::asset('../webview/js/scripts.js')}}"></script>

    <script src="{{URL::asset('../frontend/js/custom.js')}}"></script>

</body>
</html>

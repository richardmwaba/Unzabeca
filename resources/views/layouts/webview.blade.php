<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title')</title>
    <!-- jquerry -->
    <script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js')}}"></script>
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

    <!-- alumni -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="{{URL::asset('../webview/js/vendor/jquery.timelinr-0.9.6.js')}}"></script>
    <script>
        $(function(){
            $().timelinr({
                arrowKeys: 'true'
            })
        });
    </script>



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
                                <h1 class="logo"><a class="navbar-brand" href="/"><span style="color: #f5f5f5; font-size: xx-large">UNZABECA</span></a></h1>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="/">Home</a></li>

                                    <li class="dropdown"><a href="#" >About <b class="caret"></b></a>
                                        <!-- submenu-wrapper -->
                                        <div class="submenu-wrapper submenu-wrapper-topbottom">
                                            <div class="submenu-inner  submenu-inner-topbottom">
                                                <ul class="dropdown-menu">
                                                    <li><a href="/webview/committees">Committees</a></li>
                                                    <li><a href="/webview/executive">Executive</a></li>
                                                    <li><a href="/webview/general_about">General Information</a></li>
                                                </ul>
                                            </div><!-- /.submenu-inner -->
                                        </div> <!-- /.submenu-wrapper -->
                                    </li>

                                    <li class="dropdown"><a href="#" >Alumni <b class="caret"></b></a>
                                        <!-- submenu-wrapper -->
                                        <div class="submenu-wrapper submenu-wrapper-topbottom">
                                            <div class="submenu-inner  submenu-inner-topbottom">
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{url('executive/alumni/timeline')}}">Executive</a></li>
                                                    <li><a href="{{url('ordinary/alumni/timeline')}}">Ordinary Members</a></li>
                                                </ul>
                                            </div><!-- /.submenu-inner -->
                                        </div> <!-- /.submenu-wrapper -->
                                    </li>

                                    <li class="dropdown"><a href="#" >Resources <b class="caret"></b></a>
                                        <!-- submenu-wrapper -->
                                        <div class="submenu-wrapper submenu-wrapper-topbottom">
                                            <div class="submenu-inner  submenu-inner-topbottom">
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action Plan</a></li>
                                                    <li><a href="#">Research Plan</a></li>
                                                    <li><a href="#">Articles</a></li>
                                                </ul>
                                            </div><!-- /.submenu-inner -->
                                        </div> <!-- /.submenu-wrapper -->
                                    </li>

                                    <li><a href="{{url('members/join/form')}}">Join Us</a></li>

                                    <li><a href="#">Contact Us</a></li>

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

                <section class="footer-widget-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="footer-widget">
                                    <p class="subcsribe-text wow fadeInDown">Quickly utilize installed base channels before premier expertise. Conveniently extend web-enabled niche markets without 2.0 e-markets. Collaboratively incentivize .</p>

                                    <h3 class="wow fadeInDown">Subscribe to newsletter</h3>

                                    <form class="wow fadeInDown">
                                        <div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                    </form>

                                    <div class="social-link wow fadeInDown">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!-- /.footer-widget -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="footer-widget">
                                    <h3 class="wow fadeInDown">Customer Care</h3>
                                    <ul class="wow fadeInDown">
                                        <li><a href="#">Customer Support</a></li>
                                        <li><a href="#">Platinum Support</a></li>
                                        <li><a href="#">Gold Support</a></li>
                                        <li><a href="#">Standard Support</a></li>
                                        <li><a href="#">Training</a></li>
                                        <li><a href="#">Online Training</a></li>
                                        <li><a href="#">Custom Training</a></li>
                                    </ul>
                                </div><!-- /.footer-widget -->
                            </div><!-- /.col-md-2 -->
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="footer-widget">
                                    <h3 class="wow fadeInDown">Information</h3>
                                    <ul class="wow fadeInDown">
                                        <li><a href="#">Press</a></li>
                                        <li><a href="#">Articles</a></li>
                                        <li><a href="#">Reviews</a></li>
                                        <li><a href="#">Testimonials</a></li>
                                        <li><a href="#">Awards</a></li>
                                        <li><a href="#">Video Clips</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                </div><!-- /.footer-widget -->
                            </div><!-- /.col-md-2 -->
                            <div class="col-md-2 col-sm-4 col-xs-4">
                                <div class="footer-widget">
                                    <h3 class="wow fadeInDown">Solutions</h3>
                                    <ul class="wow fadeInDown">
                                        <li><a href="#">Contact Center</a></li>
                                        <li><a href="#">Knowledge</a></li>
                                        <li><a href="#">Management</a></li>
                                        <li><a href="#">Web Self-Service</a></li>
                                        <li><a href="#">Performance Metrics</a></li>
                                    </ul>
                                </div><!-- /.footer-widget -->
                            </div><!-- /.col-md-2 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </section>


                <footer class="footer-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright wow fadeInDown">
                                    <p>Copyright &copy; 2016 primex . All Rights Reserved. Designed by <a href="http://www.uicookies.com/">uicookies.com</a> </p>
                                </div><!-- /.copyright -->
                            </div><!-- /.col-md-12 -->
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
                    <li><a href="#">Home</a>
                        <ul>
                            <li class="active"><a href="index.html"><i class="fa fa-home"></i> Home Style One</a></li>
                        </ul>
                    </li>

                    <li><a href="#">About</a>
                        <ul>
                            <li><a href="about-us.html"><i class="fa fa-life-ring"></i> About Us</a></li>
                            <li><a href="about-me.html"><i class="fa fa-user"></i> About me</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog.html"><i class="fa fa-pencil-square-o"></i> Standard Blog</a></li>
                            <li><a href="blog-single.html"><i class="fa fa-pencil"></i> Single Article</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Portfolio</a>
                        <ul>
                            <li><a href="portfolio-four.html"><i class="fa fa-picture-o"></i> Four Column</a></li>
                            <li><a href="portfolio-three.html"><i class="fa fa-paper-plane-o"></i> Three Column</a></li>
                            <li><a href="portfolio-two.html"><i class="fa fa-magic"></i> Two Column</a></li>
                        </ul>
                    </li>


                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="job-page.html"><i class="fa fa-briefcase"></i> Job Page</a></li>
                            <li><a href="clients-page.html"><i class="fa fa-coffee"></i> Clients Page</a></li>
                            <li><a href="faq.html"><i class="fa fa-question-circle"></i> FAQ Page</a></li>
                            <li><a href="typography.html"><i class="fa fa-puzzle-piece"></i> Typography Page</a></li>
                        </ul>
                    </li>


                    <li><a href="#">Contact</a>
                        <ul>
                            <li><a href="contact.html"><i class="fa fa-envelope-o"></i> Contact</a></li>
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
</body>
</html>

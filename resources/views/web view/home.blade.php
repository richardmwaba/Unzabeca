<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>University of Zambia Business and Economics Association</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <!-- Font family-->
    <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans')}}" rel="stylesheet">

    <!-- Font Awesome-->
    <link href="{{URL::asset('../webview/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Bootstrap-->
    <link href="{{URL::asset('../webview/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Image Hover-->
    <link href="{{URL::asset('../webview/css/imagehover.min.css')}}" rel="stylesheet">

    <!-- Custom Styling-->
    <link href="{{URL::asset('../webview/css/style.css')}}" rel="stylesheet">
</head>
<body>
<!--Navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::asset('web view/home')}}">UNZA<span>BECA</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#latest">Latest</a></li>
                <li><a href="#committees">Committees</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#resources">Resources</a></li>
                <li><a href="#" data-target="#login" data-toggle="modal">Sign in</a></li>
                <li class="btn-trial"><a href="#join">Join us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--/ Navigation bar-->
<!--Modal box-->
<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content no 1-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center form-title">Login</h4>
            </div>
            <div class="modal-body padtrbl">

                <div class="login-box-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <div class="form-group">
                        <form name="" id="loginForm">
                            <div class="form-group has-feedback"> <!----- username -------------->
                                <input class="form-control" placeholder="Username"  id="loginid" type="text" autocomplete="off" />
                                <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback"><!----- password -------------->
                                <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
                                <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox" id="loginrem" > Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--/ Modal box-->
<!--Banner-->
<div class="banner">
    <div class="bg-color">
        <div class="container">
            <div class="row">
                <div class="banner-text text-center">
                    <div class="text-border">
                        <h2 class="text-dec">You Are Safe With Us</h2>
                    </div>
                    <div class="intro-para text-center quote">
                        <p class="big-text">Here Is What You Are Assured Of...</p>
                        <p class="small-text">Getting listed for Internship, Up close representation with management and<br>Well set up interface with the Student Union</p>
                        <a href="#footer" class="btn">Contact Us</a>
                    </div>
                    <a href="#latest" class="mouse-hover"><div class="mouse"></div></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Banner-->
<!--Feature-->
<section id ="latest" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Latest</h2>
                <p>Here is our latest news, features and updates</p>
                <hr class="bottom-line">
            </div>
            <div class="feature-info">
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right">
                            <h4>News</h4>
                            <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                        </div>
                        <div class="fea-img pull-left">
                            <i class="fa fa-css3"></i>
                        </div>
                    </div>
                </div>
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right">
                            <h4>Features</h4>
                            <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                        </div>
                        <div class="fea-img pull-left">
                            <i class="fa fa-drupal"></i>
                        </div>
                    </div>
                </div>
                <div class="fea">
                    <div class="col-md-4">
                        <div class="heading pull-right">
                            <h4>Updates</h4>
                            <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                        </div>
                        <div class="fea-img pull-left">
                            <i class="fa fa-trophy"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ feature-->
<!--Organisations-->
<section id ="committees" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="orga-stru">
                        <h3>65%</h3>
                        <p>Say NO!!</p>
                        <i class="fa fa-male"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="orga-stru">
                        <h3>20%</h3>
                        <p>Says Yes!!</p>
                        <i class="fa fa-male"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="orga-stru">
                        <h3>15%</h3>
                        <p>Can't Say!!</p>
                        <i class="fa fa-male"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-info">
                    <hgroup>
                        <h3 class="det-txt"> Is inclusive quality education affordable?</h3>
                        <h4 class="sm-txt">(Revised and Updated for 2016)</h4>
                    </hgroup>
                    <p class="det-p">Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Organisations-->
<!--Cta-->
{{--<section id="cta-2">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-12">--}}
                {{--<h2 class="text-center">Subscribe Now</h2>--}}
                {{--<p class="cta-2-txt">Sign up for our free weekly software design courses, we’ll send them right to your inbox.</p>--}}
                {{--<div class="cta-2-form text-center">--}}
                    {{--<form action="#" method="post" id="workshop-newsletter-form">--}}
                        {{--<input name="" placeholder="Enter Your Email Address" type="email">--}}
                        {{--<input class="cta-2-form-submit-btn" value="Subscribe" type="submit">--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!--/ Cta-->
<!--work-shop-->
<section id="work-shop" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Upcoming Events</h2>
                <p>Check out some of our soon coming events. You can be a part of any of these,<br> as we'll always keep you updated.</p>
                <hr class="bottom-line">
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-box text-center">
                    <div class="icon-box">
                        <i class="fa fa-html5 color-green"></i>
                    </div>
                    <div class="icon-text">
                        <h4 class="ser-text">EVent 1</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-box text-center">
                    <div class="icon-box">
                        <i class="fa fa-css3 color-green"></i>
                    </div>
                    <div class="icon-text">
                        <h4 class="ser-text">Event 2</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-box text-center">
                    <div class="icon-box">
                        <i class="fa fa-joomla color-green"></i>
                    </div>
                    <div class="icon-text">
                        <h4 class="ser-text">Event 3</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ work-shop-->
<!--Faculity member-->
<section id="faculity-member" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Meet Our Top Executive</h2>
                <p>This is our hardworking delightful team of shot callers. Their everyday message,<br>is working together to achieve our goals</p>
                <hr class="bottom-line">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="pm-staff-profile-container" >
                    <div class="pm-staff-profile-image-wrapper text-center">
                        <div class="pm-staff-profile-image">
                            <img src="{{URL::asset('../webview/img/mentor.jpg')}}" alt="" class="img-thumbnail img-circle" />
                        </div>
                    </div>
                    <div class="pm-staff-profile-details text-center">
                        <p class="pm-staff-profile-name">Bryan Johnson</p>
                        <p class="pm-staff-profile-title">President</p>

                        <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="pm-staff-profile-container" >
                    <div class="pm-staff-profile-image-wrapper text-center">
                        <div class="pm-staff-profile-image">
                            <img src="{{URL::asset('../webview/img/mentor.jpg')}}" alt="" class="img-thumbnail img-circle" />
                        </div>
                    </div>
                    <div class="pm-staff-profile-details text-center">
                        <p class="pm-staff-profile-name">Bryan Johnson</p>
                        <p class="pm-staff-profile-title">Vice President</p>

                        <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="pm-staff-profile-container" >
                    <div class="pm-staff-profile-image-wrapper text-center">
                        <div class="pm-staff-profile-image">
                            <img src="{{URL::asset('../webview/img/mentor.jpg')}}" alt="" class="img-thumbnail img-circle" />
                        </div>
                    </div>
                    <div class="pm-staff-profile-details text-center">
                        <p class="pm-staff-profile-name">Bryan Johnson</p>
                        <p class="pm-staff-profile-title">Secretary General</p>

                        <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Faculity member-->
<!--Testimonial-->
<section id="testimonial" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2 class="white">Facts About UNZABECA</h2>
                <p class="white">
                    We are Students in the School of Humanities and Social Sciences who take pleasure<br>
                    and treasure in economic matters of the University and the country at large. <br>
                    Below are some of the core activities we involve ourselves in.
                </p>
                <hr class="bottom-line bg-white">
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="text-comment">
                    <p class="text-par">
                        We offer free advice to the university populace on issues pertaining economic affairs of the nation,
                        as well as the latest exchange rates every morning in addition a weekly economic gazzet.
                    </p>
                    {{--<p class="text-name">Abraham Doe - Creative Dırector</p>--}}
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="text-comment">
                    <p class="text-par">
                        We offer personalized tutorials in selected courses to our junior students and also
                        advise them on the best course combinations for programs they wish to pursue after their non-quotas.
                    </p>
                    {{--<p class="text-name">Abraham Doe - Creative Dırector</p>--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Testimonial-->
<!--Courses-->
<section id ="events" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Our Events</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                <hr class="bottom-line">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 padleft-right">
                <figure class="imghvr-fold-up">
                    <img src="{{URL::asset('../webview/img/course01.jpg')}}" class="img-responsive">
                    <figcaption>
                        <h3>Course Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
                <figure class="imghvr-fold-up">
                    <img src="{{URL::asset('../webview/img/course02.jpg')}}" class="img-responsive">
                    <figcaption>
                        <h3>Course Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
                <figure class="imghvr-fold-up">
                    <img src="{{URL::asset('../webview/img/course03.jpg')}}" class="img-responsive">
                    <figcaption>
                        <h3>Course Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
                <figure class="imghvr-fold-up">
                    <img src="{{URL::asset('../webview/img/course04.jpg')}}" class="img-responsive">
                    <figcaption>
                        <h3>Course Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
                <figure class="imghvr-fold-up">
                    <img src="{{URL::asset('../webview/img/course05.jpg')}}" class="img-responsive">
                    <figcaption>
                        <h3>Course Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
                <figure class="imghvr-fold-up">
                    <img src="{{URL::asset('../webview/img/course06.jpg')}}" class="img-responsive">
                    <figcaption>
                        <h3>Course Name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
        </div>
    </div>
</section>
<!--/ Courses-->
<!--Pricing-->
<section id ="resources" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Resources</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
                <hr class="bottom-line">
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="price-table">
                    <!-- Plan  -->
                    <div class="pricing-head">
                        <h4>Monthly Plan</h4>
                        <span class="fa fa-usd curency"></span> <span class="amount">200</span>
                    </div>

                    <!-- Plean Detail -->
                    <div class="price-in mart-15">
                        <a href="#" class="btn btn-bg green btn-block">PURCHACE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="price-table">
                    <!-- Plan  -->
                    <div class="pricing-head">
                        <h4>Quarterly Plan</h4>
                        <span class="fa fa-usd curency"></span> <span class="amount">800</span>
                    </div>

                    <!-- Plean Detail -->
                    <div class="price-in mart-15">
                        <a href="#" class="btn btn-bg yellow btn-block">PURCHACE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="price-table">
                    <!-- Plan  -->
                    <div class="pricing-head">
                        <h4>Year Plan</h4>
                        <span class="fa fa-usd curency"></span> <span class="amount">1200</span>
                    </div>

                    <!-- Plean Detail -->
                    <div class="price-in mart-15">
                        <a href="#" class="btn btn-bg red btn-block">PURCHACE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Pricing-->
<!--Contact-->
<section id ="join" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Join Us</h2>
                <p>Be a part of us and together we'll make The University of Zambia Business and Economics<br>Association a better association.</p>
                <hr class="bottom-line">
            </div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
                <div class="col-md-6 col-sm-6 col-xs-12 left">
                    <div class="form-group">
                        <input type="text" name="firstName" class="form-control form" id="firstName" placeholder="Your First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="surname" class="form-control form" id="surname" placeholder="Your Surname" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="program" id="phone" placeholder="Your Program Of Study Or Job Title" data-rule="minlen:5" data-msg="Please enter at least 5 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone Number" data-rule="minlen:8" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12 right">
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Tell us why you want to join us"></textarea>
                        <div class="validation"></div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <!-- Button -->
                    <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Submit Application</button>
                </div>
            </form>

        </div>
    </div>
</section>
<!--/ Contact-->
<!--Footer-->
<footer id="footer" class="footer">
    <div class="container text-center">

        <h2>Contact Us</h2>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 left">
                <p>
                    <h4>Address</h4>

                        The University of Zambia, <br>School of Humanities,<br>Department of Economics,<br>Third Floor,<br>Room 123.

                </p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 middle">
                <P>
                    <h4>Contacts</h4>
                Fax: +260211123456 <br>
                Phone: +2094412345678 <br>
                Phone 2: +26093387654321

                </P>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 right">
                <p>
                    <h4>Emails</h4>
                    E-mail: abc@unzabeca.com
                </p>
            </div>
        </div>


        <ul class="social-links">
            <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
            <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
        </ul>
        ©2012-{{date('Y')}} University Of Zambia Business and Economics Association<br> All rights reserved
        <div class="credits">
            <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
            -->
            Designed by <a href="#">Code4cus</a>
        </div>
    </div>
</footer>
<!--/ Footer-->

<script src="{{URL::asset('../webview/js/jquery.min.js')}}"></script>
<script src="{{URL::asset('../webview/js/jquery.easing.min.js')}}"></script>
<script src="{{URL::asset('../webview/js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('../webview/js/custom.js')}}"></script>
<script src="{{URL::asset('../webview/contactform/contactform.js')}}}"></script>

</body>
</html>
@extends('layouts.webview')
@section('title', 'Contact Us')
@section('content')

    <section class="page-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Contact Us</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>


    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="contact-us-wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mini-contact">
                            <h2>Email us</h2>
                            <p>If you're encountering an issue or problem when working with primex you can always email us directly or via the form below</p>

                            <a href="mailto:#">uicookies@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mini-contact">
                            <h2>Call us</h2>
                            <p>If you're encountering an issue or problem when working with primex you can always email us directly or via the form below</p>

                            <a href="#">call (800) 123 1234</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mini-contact">
                            <h2>Follow us on Facebook</h2>
                            <p>There is a tone of stuff we post on there, so <em>like</em> our page and be acquainted with us on social media.</p>

                            <a href="https://www.facebook.com/University-of-Zambia-Business-and-Economics-Association-UNZABECA">Follow us →</a>
                        </div>
                    </div>
                </div><!-- /.row -->


                <div class="row">
                    <div class="col-md-8">
                        <div class="map-wrapper">
                            <div id="mapCanvas" class="map-canvas"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mini-contact">
                            <h2>Visit us</h2>
                            <address>
                                3rd floor of Economics dept, Room 123 <br>
                                University of Zambia - Great East Rd Campus, Lusaka, Zambia.
                            </address>
                        </div>
                    </div>
                </div><!-- /.row -->
                
            </div><!-- /.content-wrapper -->
        </div><!-- /.content-wrapper -->
    </div><!-- /.container -->

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADz3-rk0IH2Vl35hOEwWUxig-Txmx74ZI&callback=initialize"
            async defer></script>
    <script type="text/javascript">
        function initialize() {
            var myLatlng = new google.maps.LatLng(-15.39185283, 28.33009779);
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById('mapCanvas'), mapOptions);

            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                animation: google.maps.Animation.DROP,
                title: 'Hello World!'
            });

            var contentString = '' +
                    '' +
                    '';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            google.maps.event.addListener(marker, 'click', function () {
                infowindow.open(map, marker);
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection
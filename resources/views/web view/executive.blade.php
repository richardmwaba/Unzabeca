@extends('layouts.webview')

@section('title', 'Executive')

@section('content')

    <section class="page-header-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Executive</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li class="active">Executive</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>


    <div class="container-fluid">
        <div class="content-wrapper">
            <section class="team-wrapper">
                <h2 class="section-title">Our Team</h2>
                <p style="font-size: 15px">Meet our great team of warm people ready to help you in anyway.</p>
                <div class="css-team">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/president.jpeg')}}" alt="Image" style="border-radius: 50%">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading">{{ $executive[0]->first_name}} {{$executive[0]->middle_name }} {{$executive[0]->last_name }}<br> <small>{{$executive[0]->position->position_description }}</small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->


                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/vice_president.jpg')}}" alt="Image" style="border-radius: 50%">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading">{{$executive[1]->first_name}} {{$executive[1]->middle_name }} {{$executive[1]->last_name }}<br> <small>{{ $executive[1]->position->position_description }}</small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/secretary_general.jpg')}}" alt="Image" style="border-radius: 50%">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading"> {{$executive[2]->first_name}} {{$executive[2]->middle_name }} {{$executive[2]->last_name }}<br> <small>{{ $executive[2]->position->position_description}} </small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/vice_sg.jpg')}}" alt="Image" style="border-radius: 50%">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading"> {{$executive[3]->first_name}} {{$executive[3]->middle_name }} {{$executive[3]->last_name}} <br> <small> {{$executive[3]->position->position_description }}</small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <figure>
                                    <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                        <div class="css-overlay"></div>
                                        <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/publicity_sec.jpg')}}" alt="Image" style="border-radius: 50%">
                                        <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                    </div>
                                    <div class="css-team-info">
                                        <h3 class="css-team-heading">{{ $executive[4]->first_name}} {{$executive[4]->middle_name }} {{$executive[4]->last_name }}<br> <small>{{$executive[4]->position->position_description }}</small></h3>
                                    </div>
                                </figure>
                            </div><!-- /.col-md-4 -->


                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <figure>
                                    <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                        <div class="css-overlay"></div>
                                        <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/treasurer.jpg')}}" alt="Image" tyle="border-radius: 50%">
                                        <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                    </div>
                                    <div class="css-team-info">
                                        <h3 class="css-team-heading">{{$executive[5]->first_name}} {{$executive[5]->middle_name }} {{$executive[5]->last_name }}<br> <small>{{ $executive[5]->position->position_description }}</small></h3>
                                    </div>
                                </figure>
                            </div><!-- /.col-md-4 -->

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <figure>
                                    <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                        <div class="css-overlay"></div>
                                        <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/projects_coordinator.jpg')}}" alt="Image" tyle="border-radius: 50%">
                                        <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                    </div>
                                    <div class="css-team-info">
                                        <h3 class="css-team-heading"> {{$executive[6]->first_name}} {{$executive[6]->middle_name }} {{$executive[6]->last_name }}<br> <small>{{ $executive[6]->position->position_description}} </small></h3>
                                    </div>
                                </figure>
                            </div><!-- /.col-md-4 -->

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <figure>
                                    <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                        <div class="css-overlay"></div>
                                        <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/member_1.jpg')}}" alt="Image" tyle="border-radius: 50%">
                                        <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                    </div>
                                    <div class="css-team-info">
                                        <h3 class="css-team-heading"> {{$executive[7]->first_name}} {{$executive[7]->middle_name }} {{$executive[7]->last_name}} <br> <small> {{$executive[7]->position->position_description }}</small></h3>
                                    </div>
                                </figure>
                            </div><!-- /.col-md-4 -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <figure>
                                    <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                        <div class="css-overlay"></div>
                                        <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/member_2.jpg')}}" alt="Image" style="border-radius: 50%">
                                        <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                    </div>
                                    <div class="css-team-info">
                                        <h3 class="css-team-heading">{{ $executive[8]->first_name}} {{$executive[8]->middle_name }} {{$executive[8]->last_name }}<br> <small>{{$executive[8]->position->position_description }}</small></h3>
                                    </div>
                                </figure>
                            </div><!-- /.col-md-4 -->


                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <figure>
                                    <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                        <div class="css-overlay"></div>
                                        <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/member_3.jpg')}}" alt="Image" style="border-radius: 50%">
                                        <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                    </div>
                                    <div class="css-team-info">
                                        <h3 class="css-team-heading">{{$executive[9]->first_name}} {{$executive[9]->middle_name }} {{$executive[9]->last_name }}<br> <small>{{ $executive[9]->position->position_description }}</small></h3>
                                    </div>
                                </figure>
                            </div><!-- /.col-md-4 -->

                        </div>
                        <!-- /.col-md-12 -->
                    </div>>
                    <!-- /.row -->
                </div><!-- /.css-team -->
            </section>
        </div><!-- /.content-wrapper -->
    </div><!-- /.container-fluid -->

@endsection
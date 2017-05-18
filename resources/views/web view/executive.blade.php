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
                <div class="css-team">
                    <div class="row">
                        @foreach($executive as $exec)
                            @if($exec -> role == 'President')
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/president_.jpg')}}" alt="Image">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading">{{$exec->first_name}} {{$exec->last_name}}<br> <small>President</small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->
                            @elseif($exec -> role == 'Vice President')
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/vice_president.jpg')}}" alt="Image">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading">{{$exec->first_name}} {{$exec->last_name}}<br> <small>Vice President</small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->
                            @elseif(')
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/secretary_general.jpg')}}" alt="Image">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading">Morgen Mwaala<br> <small>Secretary General</small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/vice_sg.jpg')}}" alt="Image">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading">Choolwe Sikasamba<br> <small>Vice Secretary General</small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->

                            <div class="row>">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/publicity_sec.jpg')}}" alt="Image">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading">Kawama Banda<br> <small>Publicity Secretary</small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/treasurer.jpg')}}" alt="Image">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading">Webby Chishala<br> <small>Treasurer</small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/projects_coordinator.jpg')}}" alt="Image">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading">Peter Musangu<br> <small>Projects Coordinator</small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/member_1.jpg')}}" alt="Image">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading">Ephraim Kaumba<br> <small>Committee Member</small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->

                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/member_2.jpg')}}" alt="Image">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading">George Banda<br> <small>Committee Member</small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <figure>
                                        <div class="css-team-avatar" style="-webkit-border-radius: 300px;-moz-border-radius: 300px;border-radius: 300px">
                                            <div class="css-overlay"></div>
                                            <img class="media-object img-responsive" src="{{URL::asset('../webview/img/team/member_3.jpg')}}" alt="Image">
                                            <a class="readmore" href="about-me.html"><i class="flaticon-square57"></i></a>
                                        </div>
                                        <div class="css-team-info">
                                            <h3 class="css-team-heading">Kennan Mwanza<br> <small>Committee Member</small></h3>
                                        </div>
                                    </figure>
                                </div><!-- /.col-md-4 -->
                        @endforeach
                    </div><!-- /.row -->
                </div><!-- /.css-team -->

            </section>

        </div><!-- /.content-wrapper -->
    </div><!-- /.container -->

@endsection
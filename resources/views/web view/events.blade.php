@extends('layouts.webview')
@section('title', 'Events')
    @section('content')

        <section class="page-header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h1>{{$time}}</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#">Events</a></li>
                            <li class="active">{{$time}}</li>
                        </ol>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-->
        </section>

        <div class="container">
            <div class="content-wrapper">
                <div class="inner-content">@if($all !==[])
                    @if($events !==[])
                    @foreach($events as $event)
                    <div class="row">
                        <div class="col-md-7">
                            <div class="portfolio-content">
                                <img src="{{Storage::URL($event->photo->photoPath)}}" class="img-responsive" alt="">
                                <p>By : {{$event->addedBy->first_name}} {{$event->addedBy->middle_name}} {{$event->addedBy->last_name}}</p>

                                <ul class="check-square">
                                    <li>{{$event->committee->committee_description}}</li>
                                </ul>
                            </div> <!-- /.portfolio-content -->
                        </div> <!-- /.col-md-7 -->

                        <div class="col-md-5">
                            <div class="portfolio-info">
                                <p><span class="title">Date of event:</span>
                                    {{\Carbon\Carbon::parse($event->date_of_event)->toFormattedDateString()}}
                                </p>
                                <p><span class="title">Location:</span>
                                    {{$event->location}}
                                </p>

                                <span class="block-title">Event Description :</span>
                                <blockquote>{{$event->event_description}} </blockquote>

                                <div class="project-live-link">
                                    <strong>Contact :</strong>
                                    <a href="http://www.themehippo.com">{{$event->email}}</a>
                                </div> <!-- /.project-live-link -->
                            </div> <!-- /.portfolio-info -->
                        </div> <!-- /.col-md-5 -->
                    </div> <!-- /.row -->
                    <br>
                    <hr>
                    @endforeach
                        @else
                            <p>There are currently no events for this category</p>
                        @endif

                    <div class="related-project">
                        <h2>Other Events</h2>

                        <div class="related-work-carousel">
                            @foreach($all as $event)
                            <div class="item">
                                <div class="single-portfolio">
                                    <img src="{{Storage::URL($event->photo->photoPath)}}" alt="">
                                    <div class="portfolio-links">
                                        <a class="image-link" href="{{Storage::URL($event->photo->photoPath)}}"><i class="fa fa-search-plus"></i></a>
                                        <a href="{{Storage::URL($event->photo->photoPath)}}"><i class="fa fa-link"></i></a>
                                    </div><!-- /.links -->
                                </div><!-- /.single-portfolio -->
                            </div>
                            @endforeach
                            @else
                                <p>There are currently no events</p>
                                @endif

                        </div>
                    </div>

                </div><!-- /.inner-content -->
            </div><!-- /.content-wrapper -->
        </div><!-- /.container -->


    @endsection
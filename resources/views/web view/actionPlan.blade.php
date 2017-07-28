@extends('layouts.webview')
@section('title', 'Our Action Plan')
@section('content')

    <section class="page-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Action Plan</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Action Plan</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <div class="container-fluid">
        <div class="content-wrapper">
            <section class="about-us-wrapper">
                @if(count($actionPlan) > 0)
                    <h3 class="heading">
                        {{ $actionPlan->resourceTitle }} <br>
                        <small>Resource type - {{$actionPlan->resourceType}} . {{ \Carbon\Carbon::parse($actionPlan->created_at )->diffForHumans() }}</small>
                    </h3>
                    <div>
                    {!! $actionPlan->resourceBody !!}  <!-- decodes the html entities -->
                    </div>
                @else
                <h1 style="text-align: center">Watch this space.<br>
                    <small>Our awesome action plan will be coming soon... :)</small>
                </h1>
                @endif
            </section>
        </div>
    </div>

@endsection
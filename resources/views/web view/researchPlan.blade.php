@extends('layouts.webview')
@section('title', 'Our Research Plan')
@section('content')

    <section class="page-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Research Work</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Research Work</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <div class="container-fluid">
        <div class="content-wrapper">
            <section class="about-us-wrapper">

                @if(count($research) > 0)
                    <h3 class="heading">
                        {{ $research->resourceTitle }} <br>
                        <small>Resource type - {{$research->resourceType}} . {{ \Carbon\Carbon::parse($research->created_at )->diffForHumans() }}</small>
                    </h3>
                    <div>
                    {!! $research->resourceBody !!}  <!-- decodes the html entities -->
                    </div>
                @else
                <h1 style="text-align: center">Watch this space.<br>
                    <small>Our awesome research work will be coming soon... :)</small>
                </h1>
                @endif
            </section>
        </div>
    </div>

@endsection
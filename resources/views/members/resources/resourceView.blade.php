@extends('layouts.members')
@section('title', 'Resources View')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="page-header">
                    Resources View
                    <a href="{{ url('/members/resources') }}" class="btn btn-link pull-right">
                        <i class="fa fa-arrow-circle-left"></i> Back
                    </a>
                </h3>


                <section class="col-md-10">
                    <h3 class="heading">
                        {{ $resource->resourceTitle }} <br>
                        <small>Resource type - {{$resource->resourceType}} . {{ \Carbon\Carbon::parse($resource->created_at )->diffForHumans() }}</small>
                    </h3>
                    <div>
                    {!! $resource->resourceBody !!}  <!-- decodes the html entities -->
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
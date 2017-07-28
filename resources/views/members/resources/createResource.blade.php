@extends('layouts.members')
@section('title', 'Create Resource')
@section('content')

    <div class="container">
        <!-- error display div -->
        @if (count($errors) > 0)
            <div class="row">
                <div class="alert alert-info col-md-10">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="row">
            <h1 class="page-header">Create an <small>action plan article</small></h1>

            <div class="col-md-10">
                <form class="form-horizontal" role="form" method="post" action="{{ url('/members/resource/create-resource') }}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="control-label col-md-3">Resource title:</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="resourceTitle" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Resource type:</label>
                        <div class="col-md-5">
                            <select class="form-control" name="resourceType" id="labs" title="labs" required>
                                <option></option>
                                <option>Action Plan</option>
                                <option>Research Work</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea title="text editor" name="resourceBody" id="editor1" rows="20" cols="80" required>
                            Type in the action plan body here.
                        </textarea>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor
                            // instance, using default configuration.
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                    <div class="col-md-offset-5">
                        <a href="{{ url('/members/resources') }}" class="btn btn-lg btn-primary">
                            <i class="fa fa-arrow-circle-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-lg btn-success">Submit</button>
                    </div>
                </form>
            </div><!-- ./ col -->
        </div><!-- end row -->
    </div>

@endsection
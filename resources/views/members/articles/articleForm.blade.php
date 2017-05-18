@extends('layouts.members')
@section('title', 'Create Article')
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
            <h1 class="page-header">Create <small>an article</small></h1>

            <div class="col-md-10">
                <form class="form-horizontal" role="form" method="post" action="{{url('/members/article/create')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="control-label col-md-3">Article title:</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="articleTitle" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Article author:</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="author" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Article image: <br>
                            <small>(can only upload 1 photo)</small>
                        </label>
                        <div class="col-md-5">
                            <input type="file" name="photo">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea title="text editor" name="articleBody" id="editor1" rows="10" cols="80">
                            Type in the article body here.
                        </textarea>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor
                            // instance, using default configuration.
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                    <div class="col-md-offset-5">
                        <button type="reset" class="btn btn-lg btn-default">Clear</button>
                        <button type="submit" class="btn btn-lg btn-success">Submit</button>
                    </div>
                </form>
            </div><!-- ./ col -->
        </div><!-- end row -->
    </div>

@endsection
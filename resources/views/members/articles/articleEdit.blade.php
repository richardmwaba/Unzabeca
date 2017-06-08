@extends('layouts.members')
@section('title', 'Edit Article')
@section('content')

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
        <h1 class="page-header">Edit <small>- {{$article->articleTitle}}</small></h1>

        <div class="col-md-10">
            <form class="form-horizontal" role="form" method="post" action="{{url('/members/article/update/'.$article->article_id)}}" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="control-label col-md-3">Article title:</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="articleTitle" value="{{$article->articleTitle}}" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Article author:</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="author" value="{{$article->author}}" required autofocus>
                    </div>
                </div>
                <p>Image can not be updated...</p>
                <div class="form-group">
                    <textarea title="text editor" name="articleBody" id="editor1" rows="20" cols="80">
                        {!! $article->articleBody !!}
                    </textarea>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor1');
                    </script>
                </div>
                <div class="col-md-offset-5">
                    <button type="submit" class="btn btn-lg btn-primary">Save</button>
                    <button type="reset" class="btn btn-lg btn-default">Clear</button>
                </div>
            </form>
        </div><!-- ./ col -->
    </div><!-- end row -->

@endsection
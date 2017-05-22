@extends('layouts.webview')
@section('title', 'Articles')
@section('content')
    <!-- Breadcrumb -->
    <section class="page-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Articles</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active">Articles</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="inner-content">

                <div class="row">
                    <div id="grid">

                        @foreach($articles as $article)
                        <div class="portfolio-item col-sm-6 col-md-4 col-xs-12">
                            <div class="single-portfolio">
                                <img src="{{URL::asset('../storage/'.$article->articlePhoto->filename)}}" height="250px"  alt="Article image">
                                <div class="portfolio-links">
                                    <a href="{{url('webview/article/article-single/'.$article->article_id)}}">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div><!-- /.links -->
                            </div><!-- /.single-portfolio -->
                        </div><!-- /.portfolio-item -->
                        @endforeach

                    </div><!-- /#grid -->
                </div><!-- /.row -->
            </div><!-- /.inner-content -->
        </div><!-- /.content-wrapper -->
    </div><!-- end container -->

@endsection
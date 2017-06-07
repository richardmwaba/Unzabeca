@extends('layouts.webview')
@section('title', 'Single Article view')
@section('content')

    <!-- custom css for article image -->
    <style>
        .banner {
            padding: 180px 0;
            color: #f8f8f8;
            background: url( {{URL::asset('../storage/'.$article->articlePhoto->filename)}} ) no-repeat center center;
            background-size: cover;
        }
    </style>

    <section class="page-header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Article</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('webview/article')}}">Article</a></li>
                        <li class="active">Single Article</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div class="content-wrapper">
            <div class="inner-content">
                <div class="row">
                    <div class="col-xs-12 col-md-9 col-sm-8">
                        <article class="blog-post-wrapper single-article">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li><span class="the-time">{{ \Carbon\Carbon::parse($article->created_at )->diffForHumans() }}</span></li>
                                        <li><span class="the-author"> By: {{ $article->author }}</span></li>
                                        {{--<li><span class="the-category"> In: <a href="#">Feature</a></span></li>--}}
                                        {{--<li><span class="the-comments" > <a href="#">14 Comments</a></span></li>--}}
                                    </ul>
                                </div><!-- /.entry-meta -->

                                <h2 class="entry-title">{{ $article->articleTitle }}</h2>
                            </header><!-- /.entry-header -->

                            <div class="banner">
                                {{--<img src="{{URL::asset('../storage/'.$article->articlePhoto->filename)}}" class="img-responsive " alt="">--}}
                            </div><!-- /.post-thumbnail -->

                            <!-- Article body -->
                            <div class="entry-content">
                                <br>
                                {!! $article->articleBody !!}
                            </div><!-- /.entry-content -->
                        </article>
                    </div><!-- /.col-md-9 -->

                    <div class="col-xs-12 col-md-3 col-sm-4">
                        <div class="sidebar-wrapper">

                            {{--<aside class="widget widget_search">--}}
                                {{--<form role="search" method="get" class="search-form" action="getpost">--}}
                                    {{--<label class="sr-only">Search for:</label>--}}
                                    {{--<input type="search" class="form-control" placeholder="Search" value="" name="s" title="Search for:">--}}
                                    {{--<button type="submit" class="search-submit" value=""><i class="fa fa-search"></i></button>--}}
                                {{--</form>--}}
                            {{--</aside>--}}
                            <!-- recent posts side -->
                            <aside class="widget widget_categories">
                                <h2 class="widget-title">Recent posts</h2>
                                <ul>
                                    @foreach($others as $other)
                                        <li><a href="{{url('webview/article/article-single/'.$other->article_id)}}">
                                                {{ $other->articleTitle }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </aside>

                        </div><!-- /.sidebar-wrapper -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
                <br>

                <!-- related articles -->
                <div class="related-project">
                    <h2>Related Articles</h2>

                    <div class="related-work-carousel">
                        @foreach($others as $other)
                        <div class="item">
                            <div class="single-portfolio">
                                <img src="{{URL::asset('../storage/'.$other->articlePhoto['filename'])}}" alt="Article image">
                                <div class="portfolio-links">
                                    <a href="{{url('webview/article/article-single/'.$article->article_id)}}"><i class="fa fa-link"></i></a>
                                </div><!-- /.links -->
                            </div><!-- /.single-portfolio -->
                        </div>
                        @endforeach
                    </div>
                </div><!-- ./related articles -->

            </div><!-- /.inner-content -->
        </div><!-- /.content-wrapper -->
    </div><!-- /.container -->

@endsection
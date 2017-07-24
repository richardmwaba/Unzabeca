@extends('layouts.webview')
@section('title', 'Articles')
@section('content')

    <style>
        img {
            display: block;
            max-width: 700px;
            max-height: 300px;
            width: auto;
            height: auto;
        }
    </style>

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
        <div class="content-wrapper col-md-10 col-md-offset-1">
            <div class="inner-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-10">
                        @foreach($articles as $article)
                        <article class="blog-post-wrapper">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <ul class="list-inline">
                                        <li><span class="the-time"><a href="#">{{ \Carbon\Carbon::parse($article->created_at )->diffForHumans() }}</a></span></li>
                                        <li><span class="the-author"> By: <a href="#">{{$article->author}}</a></span></li>
                                    </ul>
                                </div><!-- /.entry-meta -->

                                <h2 class="entry-title"><a href="#">{{$article->articleTitle}}</a></h2>
                            </header><!-- /.entry-header -->
                            <div class="entry-content">
                                <p>{!! \Illuminate\Support\Str::limit($article->articleBody, 300, " ...") !!}</p>
                            </div><!-- /.entry-content -->
                            <div class="post-thumbnail">
                                <img src="{{Storage::URL($article->articlePhoto['filename'])}}" class="img-responsive banner" alt="article image">
                            </div><!-- /.post-thumbnail -->
                            <footer class="entry-footer">
                                <a href="{{url('webview/article/article-single/'.$article->article_id)}}" class="btn btn-primary"> Read More</a>
                            </footer><!-- /.entry-footer -->
                        </article>
                        @endforeach

                        <!-- pagination-wrap -->
                        <nav class="pagination-wrap text-center">
                            <ul class="pagination">
                                {{ $articles->links() }}
                            </ul>
                        </nav>
                    </div>
                </div><!-- ./row -->
            </div><!-- /.inner-content -->
        </div><!-- /.content-wrapper -->
    </div><!-- end container -->

@endsection
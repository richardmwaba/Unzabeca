@extends('layouts.members')
@section('title', 'Manage Articles')
@section('content')

    <div class="row">
        <!-- table show all articles -->
        <div class="col-md-12">
            @if(count($articles) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">Manage your Articles</div>
                <div class="panel-body">

                    <a href="{{ url('/members/article/create') }}" class="btn btn-md btn-link">Create New Article</a>

                    <table class="table table-striped responsive-utilities" data-toggle="table" data-show-refresh="false"
                           data-show-toggle="true" data-show-columns="true" data-search="true"
                           data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name"
                           data-sort-order="desc" style="font-size: small">

                        <thead>
                        <tr>
                            <!--<th data-field="state" data-checkbox="true">Count</th>-->
                            <th data-field="articleTitle" data-sortable="true">Article title</th>
                            <th data-field="author" data-sortable="true">Author</th>
                            <th data-field="datePosted" data-sortable="true">Date posted</th>
                            <th data-field="delete">Delete/Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <!--<td data-field="state" data-checkbox="true">{$imprest->id}}</td>-->
                                <td><a href="{{url('/members/article/view/'. $article->article_id)}}">{{ $article->articleTitle }}</a></td>
                                <td>{{ $article->author }}</td>
                                <td>{{ \Carbon\Carbon::parse($article->created_at )->toFormattedDateString() }}</td>
                                <td>
                                    <!-- delete article -->
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{$article->article_id}}">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>

                                    <a href=" {{url('/members/article/edit/'. $article->article_id)}}" class="btn btn-xs btn-success">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </a>

                                    <form role="form" method="post" action="{{url('/members/article/delete/'.$article->article_id)}}">
                                        {{csrf_field()}}<!--delete confirmation Modal -->
                                        <div class="modal fade" id="deleteModal{{$article->article_id}}" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Confirmation</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to <strong>delete article ->
                                                                '{{$article->articleTitle}}'</strong> from the system?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger">Yes</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                                            Close
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end modal -->
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- ./ panel -->
            @else
                <h3 style="color:darkgoldenrod; text-align: center;">Well, it look like there aren't any article to manage... :'( <br>
                    Click the <em>Create New article</em> button to add articles...
                </h3>
            @endif
        </div>

    </div><!-- end row -->


@endsection
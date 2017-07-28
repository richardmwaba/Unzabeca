@extends('layouts.members')
@section('title', 'Manage Resources')
@section('content')

    <div class="row">
        <!-- table show all articles -->
        <div class="col-md-12">
            <!-- if check comes here -->
            @if(count($resources) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">Resources</div>
                    <div class="panel-body">

                        <p>
                            <em>View all the resources created and be able to update, view or delete them. This list of resources lists both
                                action plans and research work. <br>These can be create by clicking the link below and filling in the form
                                appropriately.
                            </em>
                        </p>

                        <a href="{{ url('/members/resource/create-resource') }}">Create resource</a>

                        <table class="table table-striped responsive-utilities" data-toggle="table" data-show-refresh="false"
                               data-show-toggle="true" data-show-columns="true" data-search="true"
                               data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name"
                               data-sort-order="desc" style="font-size: small">

                            <thead>
                            <tr>
                                <!--<th data-field="state" data-checkbox="true">Count</th>-->
                                <th data-field="articleTitle" data-sortable="true">Resource title</th>
                                <th data-field="author" data-sortable="true">Resource type</th>
                                <th data-field="datePosted" data-sortable="true">Date posted</th>
                                <th data-field="delete">Delete/Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- foreach here -->
                            @foreach($resources as $resource)
                                <tr>
                                    <!--<td data-field="state" data-checkbox="true">{$imprest->id}}</td>-->
                                    <td><a href="{{ url('/members/resource/view/'.$resource->id) }}">{{ $resource->resourceTitle }}</a></td>
                                    <td>{{ $resource->resourceType }}</td>
                                    <td>{{ \Carbon\Carbon::parse($resource->created_at )->toFormattedDateString() }}</td>
                                    <td>
                                        <!-- delete article -->
                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{$resource->id}}">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </button>

                                        <a href="{{url('/members/resource/edit/'. $resource->id)}}" class="btn btn-xs btn-success">
                                            <i class="glyphicon glyphicon-edit"></i>
                                        </a>

                                        <form role="form" method="post" action="{{ url('/members/resource/delete/'.$resource->id) }}">
                                        {{csrf_field()}}<!--delete confirmation Modal -->
                                            <div class="modal fade" id="deleteModal{{$resource->id}}" role="dialog">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Confirmation</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to <strong>delete
                                                                    '{{$resource->resourceTitle}}'</strong> from the system?</p>
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
                            <!-- end foreach comes here -->
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
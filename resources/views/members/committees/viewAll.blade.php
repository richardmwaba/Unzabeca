@extends('layouts.members')
@section('content')

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Committees</div>

                <div class="panel-body">

                    <button class="btn btn-link" data-toggle="modal" data-target="#add_new">Add new committee</button>

                    <table class="table table-striped responsive-utilities" data-toggle="table"
                           data-show-refresh="false"
                           data-show-toggle="true" data-show-columns="true" data-search="true"
                           data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name"
                           data-sort-order="desc" style="font-size: small">

                        <thead>
                        <tr>
                            <!--<th data-field="state" data-checkbox="true">Count</th>-->
                            <th data-field="committee_id" data-sortable="true">Committee Id</th>
                            <th data-field="committee_description" data-sortable="true">Description</th>
                            <th data-field="delete/edit" data-sortable="true">Delete | Edit</th>
                        </tr>
                        </thead>

                        @if($committees!=[])
                            @foreach($committees as $committee)

                                <tr>

                                    <td>{{$committee->committee_id}}</td>
                                    <td>{{$committee->committee_description}}</td>

                                    <td>

                                        <button class="btn btn-default btn-xs btn-danger" type="button" data-toggle="modal" title="Delete" data-target="#deleteModal-{{$committee->committee_id}}">
                                            <i class="glyphicon glyphicon glyphicon-trash"></i>
                                        </button>

                                        <button class="btn btn-default btn-xs btn-success" type="button" title="Edit" data-toggle="modal" data-target="#editCommitteeModal-{{$committee->committee_id}}"><i class="glyphicon glyphicon glyphicon-edit"></i></button>

                                        <form role="form" method="post" action="{{url('/members/committees/delete/'.$committee->committee_id)}}">
                                        {{csrf_field()}}<!--delete confirmation Modal -->
                                            <div class="modal fade" id="deleteModal-{{$committee->committee_id}}" role="dialog">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Confirmation</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to <strong>delete
                                                                    {{$committee->committee_description}}</strong> from the system?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger">Yes</button>
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                                                Close
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end modal -->
                                        </form>

                                        <!-- Modal for editing committee-->
                                        <div class="modal fade" id="editCommitteeModal-{{$committee->committee_id}}" role="dialog">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Edit committee</h4>
                                                    </div>
                                                    <div class="modal-body" style="max-height: 500px;overflow-y: scroll;">
                                                        <div class="row">
                                                            <form class="" role="form" method="POST"
                                                                  action="{{ url('/members/committees/update') }}">
                                                                {!! csrf_field() !!}

                                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <label>Committee ID</label>
                                                                    <input class="form-control" id="committee_id" name="committee_id" type="text" value="{{$committee->committee_id}}" required readonly>
                                                                </div>
                                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <label>Description</label>
                                                                    <input class="form-control" value="{{$committee->committee_description}}" id="committee_description" name="committee_description" type="text" required autofocus>
                                                                </div>


                                                                <button type="submit" class="btn btn-default btn-primary col-lg-offset-9 col-md-offset-9 col-sm-offset-9 col-xs-offset-7">Save</button>
                                                                <button type="reset" class="btn btn-default btn-danger pull-right" data-dismiss="modal">Cancel</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end modal -->
                                        <!-- Modal for editing committee ends here-->
                                    </td>

                                </tr>
                            @endforeach
                        @endif
                    </table>


                    <form class="form-horizontal" role="form" method="POST"
                          action="{{ url('/members/committees/create') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal fade" id="add_new" role="dialog">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button id="close" type="button" class="close"
                                                data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title text-primary">Add committee</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">

                                                <div class="form-group">
                                                    <label for="committee_id" class="control-label">committee id</label>

                                                    <div class="col-md-6">
                                                        <input id="committee_id" type="text" class="form-control"
                                                               name="committee_id" value="CMT-{{random_int(1000,9999)}}"
                                                               required autofocus>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="committee_description" class="control-label">committee description</label>

                                                    <div class="col-md-6">

                                                       <textarea value="" id="committee_description" class="form-control"
                                                                 name="committee_description" onkeyup="countChar(this)" rows="3"
                                                                 cols="20" placeholder="Enter a short description of this committee here" required autofocus></textarea>
                                                        <div id="charNum"></div>

                                                        <!-- script to count number of characters entered in textarea-->
                                                        <script>
                                                            function countChar(val) {
                                                                var len = val.value.length;
                                                                if (len >= 100) {
                                                                    val.value = val.value.substring(0, 100);
                                                                } else {
                                                                    $('#charNum').text(100 - len);
                                                                }
                                                            }
                                                        </script>


                                                    </div>

                                                </div>


                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <div class="col-md- ">

                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="reset" class="btn btn-danger">Cancel</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    <!-- /.col-lg-12 -->
    <!-- /.row -->
    <!-- /#page-wrapper -->
    <script>
        function delete_committee(committee_description, committee) {
            var xhttp;
            if (window.XMLHttpRequest) {
                xhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            if (confirm("Are you sure you want to delete " + committee_description + "?")) {
                xhttp.open("GET", "{{url('/committees/committees/delete')}}/" + committee, false);
                xhttp.send();
                alert(committee_description + " has been deleted!");
                location.reload();
            }

        }
    </script>


@endsection
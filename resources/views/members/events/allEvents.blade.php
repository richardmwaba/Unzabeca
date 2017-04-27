@extends('layouts.members')
@section('content')

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Events</div>

                <div class="panel-body">

                    <button class="btn btn-link" data-toggle="modal" data-target="#add_new">Add new event</button>

                    <table class="table table-striped responsive-utilities" data-toggle="table"
                           data-show-refresh="false"
                           data-show-toggle="true" data-show-columns="true" data-search="true"
                           data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name"
                           data-sort-order="desc" style="font-size: small">

                        <thead>
                        <tr>
                            <!--<th data-field="state" data-checkbox="true">Count</th>-->
                            <th data-field="id" data-sortable="true">Id</th>
                            <th data-field="description" data-sortable="true">Description</th>
                            <th data-field="status" data-sortable="true">Status</th>
                            <th data-field="date" data-sortable="true">Date</th>
                            <th data-field="committee" data-sortable="true">Committee</th>
                            <th data-field="email" data-sortable="true">Email</th>
                            <th data-field="location" data-sortable="true">Location</th>
                            <th data-field="addedBy" data-sortable="true">Added by</th>
                            <th data-field="delete" data-sortable="true">Edit-Delete</th>
                        </tr>
                        </thead>

                        @if($events!=[])
                            @foreach($events as $event)

                                <tr>

                                    <td>{{$event->event_id}}</td>
                                    <td>{{$event->event_description}}</td>
                                    <td>{{$event->status}}</td>
                                    <td>{{\Carbon\Carbon::parse($event->date_of_event)->toFormattedDateString()}}</td>
                                    <td>{{$event->committee->committee_description}}</td>
                                    <td>{{$event->email}}</td>
                                    <td>{{$event->location}}</td>
                                    <td>{{$event->addedBy->first_name}} {{$event->addedBy->last_name}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-link btn-xs" href="{{url('/members/events/edit/'.$event->event_id)}}"
                                               type="button" name="toggle" title="edit">
                                                <i class="glyphicon glyphicon glyphicon-edit"></i>
                                            </a>
                                            <a class="btn btn-link btn-xs"
                                               onclick="delete_event('{{$event->event_description}}', '{{$event->event_id}}')"
                                               type="button" name="toggle" title="delete">
                                                <i class="glyphicon glyphicon glyphicon-trash"></i>
                                            </a>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </table>


                    <form class="form-horizontal" role="form" method="POST"
                          action="{{ url('/members/events/create') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="modal fade" id="add_new" role="dialog">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button id="close" type="button" class="close"
                                                data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title text-primary">Add event</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">

                                                <div class="form-group">
                                                    <label for="event_id" class="control-label">Event id</label>

                                                    <div class="col-md-6">
                                                        <input id="event_id" type="text" class="form-control"
                                                               name="event_id" value="EVNT-{{random_int(1000,9999)}}"
                                                               required autofocus>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="event_description" class="control-label">Event description</label>

                                                    <div class="col-md-6">

                                                       <textarea value="" id="event_description" class="form-control"
                                                        name="event_description" onkeyup="countChar(this)" rows="3"
                                                                  cols="20" placeholder="Enter a short description of this event here" required autofocus></textarea>
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

                                                <div class="form-group">
                                                    <label for="event_date" class="control-label">Date of event</label>

                                                    <div class="col-md-6">
                                                        <input id="event_date" placeholder="Enter event date here" type="date" class="form-control"
                                                               name="date_of_event"
                                                               required autofocus>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="committee_id"
                                                           class="control-label">Committee</label>

                                                    <div class="col-md-6">
                                                        <select id="committee_id" name="committee_id" class="form-control" required autofocus>
                                                            <option value="">Select the corresponding committee</option>
                                                            @foreach($committees as $committee)
                                                            <option value="{{$committee->committee_id}}">{{$committee->committee_description}}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="email"
                                                           class="control-label">Email</label>

                                                    <div class="col-md-6">
                                                        <input type="email" value="{{Auth::user()->email}}" name="email" class="form-control" placeholder="email">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="location" class="control-label">Location of event</label>

                                                    <div class="col-md-6">
                                                        <input id="location" placeholder="location of the event or address" type="text" class="form-control"
                                                               name="location" required>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <div class="col-md- ">

                                                <button type="submit" class="btn btn-default">Save</button>
                                                <button type="reset" class="btn btn-default">Cancel</button>
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
        function delete_event(event_description, event) {
            var xhttp;
            if (window.XMLHttpRequest) {
                xhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            if (confirm("Are you sure you want to delete " + event_description + "?")) {
                xhttp.open("GET", "{{url('/members/events/delete')}}/" + event, false);
                xhttp.send();
                alert(event_description + " has been deleted!");
                location.reload();
            }

        }
    </script>


@endsection
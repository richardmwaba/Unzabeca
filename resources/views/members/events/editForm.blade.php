@extends('layouts.members')

@section('content')


    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit {{$event->event_description}}</div>

                <div class="panel-body">

    <form class="form-horizontal" role="form" method="POST"
          action="{{ url('/members/events/update') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="event_id" class="control-label">Event id</label>

                                    <div class="col-md-6">
                                        <input id="event_id" type="text" class="form-control"
                                               name="event_id" value="{{$event->event_id}}"
                                               readonly>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="event_description" class="control-label">Event description</label>

                                    <div class="col-md-6">

                                                       <textarea id="event_description" class="form-control"
                                                                 name="event_description" onkeyup="countChar(this)" rows="3"
                                                                 cols="20" placeholder="Enter a short description of this event here" required autofocus>{{$event->event_description}}</textarea>
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
                                        <input id="event_date" value="{{$event->date_of_event}}" type="date" class="form-control"
                                               name="date_of_event"
                                               required autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="committee_id"
                                           class="control-label">Committee</label>

                                    <div class="col-md-6">
                                        <select id="committee_id" name="committee_id" class="form-control" required autofocus>
                                            <option value="{{$event->committee->committee_id}}">{{$event->committee->committee_description}}</option>
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
                                        <input id="location" value="{{$event->location}}" type="text" class="form-control"
                                               name="location" required>
                                    </div>
                                </div>



                        <div class="form-footer">
                            <div class="">

                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-default">Cancel</button>
                            </div>

                        </div>
    </form>
        </div>
    </div>
    </div>
    </div>


    @endsection
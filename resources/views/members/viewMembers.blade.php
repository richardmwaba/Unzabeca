@extends('layouts.members')

@section('content')
    {!! method_field('DELETE') !!}

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"> <b>Current Members</b></div>

                <div class="panel-body">

                    <button class="btn btn-link" data-toggle="modal" data-target="#addMemberModal">Add new member</button>

                    <table class="table-striped responsive-utilities" data-toggle="table" data-show-refresh="false"
                           data-show-toggle="true" data-show-columns="true" data-search="true"
                           data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name"
                           data-sort-order="desc" style="font-size: small">
                        <thead>
                        <tr>
                            {{--<th data-field="state" data-checkbox="true">Count</th>--}}
                            <th data-field="firstName" data-sortable="true"> First Name</th>
                            <th data-field="lastName" data-sortable="true"> Last Name</th>
                            <th data-field="email" data-sortable="true"> Email</th>
                            <th data-field="year" data-sortable="true"> Year Joined</th>
                            <th data-field="status" data-sortable="true"> Membership</th>
                            <th data-field="role" data-sortable="true"> Position</th>
                            <th data-field="phoneNumber" data-sortable="true">Phone Number</th>
                            <th data-field="deleteEdit" data-sortable="true">Delete | Edit</th>
                        </tr>
                        </thead>
                        @foreach( $members as $member)
                            <tr>
                                <td>
                                    @if(isset($members))
                                        {{$member->first_name}}
                                    @endif
                                </td>
                                <td>
                                    @if(isset($members))
                                        {{$member->last_name}}
                                    @endif
                                </td>
                                <td>
                                    @if(isset($members))
                                        {{$member->email}}
                                    @endif
                                </td>
                                <td>
                                    @if(isset($members))
                                        {{$member->year}}
                                    @endif
                                </td>
                                <td>
                                    @if(isset($members))
                                        {{$member->status->status_description}}
                                    @endif
                                </td>
                                <td>
                                    @if(isset($members))
                                        {{$member->position->position_description}}
                                    @endif
                                </td>
                                <td>
                                    @if(isset($members))
                                        {{$member->phone_number}}
                                    @endif
                                </td>
                                <td>

                                    <button class="btn btn-default btn-xs btn-danger" type="button" data-toggle="modal" title="Delete" data-target="#deleteModal-{{$member->member_id}}">
                                        <i class="glyphicon glyphicon glyphicon-trash"></i>
                                    </button>

                                    <button class="btn btn-default btn-xs btn-success" type="button" title="Edit" data-toggle="modal" data-target="#editMemberModal-{{$member->member_id}}"><i class="glyphicon glyphicon glyphicon-edit"></i></button>

                                    <form role="form" method="post" action="{{url('/members/deleteMember/'.$member->member_id)}}">
                                    {{csrf_field()}}<!--delete confirmation Modal -->
                                        <div class="modal fade" id="deleteModal-{{$member->member_id}}" role="dialog">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Confirmation</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to <strong>delete
                                                                {{$member->first_name}}</strong> from the system?</p>
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

                                    <!-- Modal for editing member-->
                                    <div class="modal fade" id="editMemberModal-{{$member->member_id}}" role="dialog">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Member</h4>
                                                </div>
                                                <div class="modal-body" style="max-height: 500px;overflow-y: scroll;">
                                                    <div class="row">
                                                        <form class="" role="form" method="POST"
                                                              action="{{ url('/members/update/'.$member->member_id) }}">
                                                            {!! csrf_field() !!}

                                                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} col-md-12 col-sm-12 col-xs-12">

                                                                <label>First Name</label>
                                                                <input class="form-control" id="first_name" name="first_name" type="text" value={{$member->first_name}}>
                                                                @if ($errors->has('first_name'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('first_name') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }} col-md-12 col-sm-12 col-xs-12">

                                                                <label>Middle Name</label>
                                                                <input class="form-control" id="middle_name" value="{{$member->middle_name}}" name="middle_name" type="text">
                                                                @if ($errors->has('middle_name'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                <label>Last Name</label>
                                                                <input class="form-control" id="last_name" name="last_name" type="text" value="{{$member->last_name}}">
                                                                @if ($errors->has('last_name'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('last_name') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                <label>Email</label>
                                                                <input class="form-control" id="email" name="email" type="email" value="{{$member->email }}">
                                                                @if ($errors->has('email'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                <label>Year</label>
                                                                <input class="form-control" name="year"  value="{{$member->year}}" type="text">
                                                                @if ($errors->has('year'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('year') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                <label>Phone Number</label>
                                                                <input class="form-control" name="phone_number" type="text" value="{{$member->phone_number }}">
                                                                @if ($errors->has('phone_number'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <div class="form-group{{ $errors->has('status_id') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                <label>Status</label>
                                                                <select id="ddl3" onchange="dropdowns(this,document.getElementById('ddl4'))" class="form-control" name="status_id">
                                                                    <option name="currentValue" value="{{$member->status->status_description}}">{{$member->status->status_description}}</option>
                                                                    <option value="">-- select one --</option>
                                                                    <option name="Executive" value="1"> Executive Member</option>
                                                                    <option name="Ordinary" value="2"> Ordinary Member</option>
                                                                    <option name="Exec Alumni" value="3"> Executive Alumni Member</option>
                                                                    <option name="Ordinary Alumni" value="4"> Ordinary Alumni Member</option>
                                                                </select>

                                                                @if ($errors->has('status_id'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('status_id') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            @if($member->status_id == '1')
                                                                <div id="position" class="form-group{{ $errors->has('position_id') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                    <label id="position_label">Position</label>
                                                                    <select id="ddl4" class="form-control" name="position_id">
                                                                        //Content is loaded from an external JavaScript file
                                                                    </select>
                                                                    @if ($errors->has('position_id'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('position_id') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                            @endif

                                                            {{--<div class="form-group{{ $errors->has('issuer') ? ' has-error' : '' }}">--}}

                                                            {{--<label>Added by</label>--}}
                                                            {{--<input class="form-control" placeholder="" name="issuer" value="{{$user->member->first_name}} {{$user->member->last_name}}" type="text">--}}
                                                            {{--@if ($errors->has('issuer'))--}}
                                                            {{--<span class="help-block">--}}
                                                            {{--<strong>{{ $errors->first('issuer') }}</strong>--}}
                                                            {{--</span>--}}
                                                            {{--@endif--}}
                                                            {{--</div>--}}

                                                            <button type="submit" class="btn btn-default btn-primary col-lg-offset-9 col-md-offset-9 col-sm-offset-9 col-xs-offset-7">Save</button>
                                                            <button type="reset" class="btn btn-default btn-danger pull-right" data-dismiss="modal">Cancel</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end modal -->
                                    <!-- Modal for editing member ends here-->
                                </td>
                            </tr>
                            {{--@endfor--}}
                        @endforeach
                    </table>

                    <!-- Modal for adding new member-->
                    <div class="modal fade" id="addMemberModal" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">New Member</h4>
                                </div>
                                <div class="modal-body" style="max-height: 500px;overflow-y: scroll;">
                                    <div class="row">
                                        <form class="" role="form" method="POST"
                                              action="{{ url('/members/addMember') }}">
                                            {!! csrf_field() !!}

                                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} col-md-12 col-sm-12 col-xs-12">

                                                <label>First Name</label>
                                                <input class="form-control" id="first_name" placeholder="Enter first name" name="first_name" type="text"
                                                       value={{ old('first_name') }}>
                                                @if ($errors->has('first_name'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }} col-md-12 col-sm-12 col-xs-12">

                                                <label>Middle Name</label>
                                                <input class="form-control" id="middle_name" placeholder="Enter middle name" name="middle_name" type="text">
                                                @if ($errors->has('middle_name'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('middle_name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <label>Last Name</label>
                                                <input class="form-control" id="last_name" placeholder="Enter last name" name="last_name" type="text"
                                                       value="{{ old('last_name') }}">
                                                @if ($errors->has('last_name'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <label>Email</label>
                                                <input class="form-control" id="email" placeholder="Enter email address" name="email" type="email"
                                                       value="{{ old('email') }}">
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <label>Date Created</label>
                                                <input class="form-control" name="year"  value="{{date('jS F, Y')}}" type="text">
                                                @if ($errors->has('year'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('year') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <label>Phone Number</label>
                                                <input class="form-control" placeholder="Enter the phone number" name="phone_number" type="text"
                                                       value="{{ old('phone_number') }}">
                                                @if ($errors->has('phone_number'))
                                                    <span class="help-block">
                                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                                        </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('status_id') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <label>Status</label>
                                                <select id="ddl1" onchange="dropdowns(this,document.getElementById('ddl'))" class="form-control" name="status_id">
                                                    <option value="">-- select one --</option>
                                                    <option name="Executive" value="1"> Executive Member</option>
                                                    <option name="Ordinary" value="2"> Ordinary Member</option>
                                                    <option name="Exec Alumni" value="3"> Executive Alumni Member</option>
                                                    <option name="Ordinary Alumni" value="4"> Ordinary Alumni Member</option>
                                                </select>

                                                @if ($errors->has('status_id'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('status_id') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group{{ $errors->has('position_id') ? ' has-error' : '' }} col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                <label id="position_label">Position</label>
                                                <select id="ddl" class="form-control" name="position_id">
                                                    //Content is loaded from an external JavaScript file
                                                </select>
                                                @if ($errors->has('position_id'))
                                                    <span class="help-block">
                                                            <strong>{{ $errors->first('position_id') }}</strong>
                                                        </span>
                                                @endif
                                            </div>
                                            <div>
                                                <input class="form-control" style="display: none" value="1" name="approved" type="text">
                                            </div>
                                            {{--<div class="form-group{{ $errors->has('issuer') ? ' has-error' : '' }}">--}}

                                            {{--<label>Added by</label>--}}
                                            {{--<input class="form-control" placeholder="" name="issuer" value="{{$user->member->first_name}} {{$user->member->last_name}}" type="text">--}}
                                            {{--@if ($errors->has('issuer'))--}}
                                            {{--<span class="help-block">--}}
                                            {{--<strong>{{ $errors->first('issuer') }}</strong>--}}
                                            {{--</span>--}}
                                            {{--@endif--}}
                                            {{--</div>--}}

                                            <button type="submit" class="btn btn-default btn-primary col-lg-offset-9 col-md-offset-9 col-sm-offset-9 col-xs-offset-7">Save</button>
                                            <button type="reset" class="btn btn-default btn-danger pull-right" data-dismiss="modal">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end modal -->

                    <script>
                        $(function () {
                            $('#hover, #striped, #condensed').click(function () {
                                var classes = 'table';

                                if ($('#hover').prop('checked')) {
                                    classes += ' table-hover';
                                }
                                if ($('#condensed').prop('checked')) {
                                    classes += ' table-condensed';
                                }
                                $('#table-style').bootstrapTable('destroy')
                                        .bootstrapTable({
                                            classes: classes,
                                            striped: $('#striped').prop('checked')
                                        });
                            });
                        });

                        function rowStyle(row, index) {
                            var classes = ['active', 'success', 'info', 'warning', 'danger'];

                            if (index % 2 === 0 && index / 2 < classes.length) {
                                return {
                                    classes: classes[index / 2]
                                };
                            }
                            return {};
                        }
                    </script>
                    <!--/. script-->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


@endsection
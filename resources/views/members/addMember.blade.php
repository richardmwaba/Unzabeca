@extends('layouts.members')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"> Add New Member</div>

                <div class="panel-body">
                    <div class="col-md-6 col-lg-6">
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ url('/members/addMember') }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">

                                <label>First Name</label>
                                <input class="form-control" id="first_name" placeholder="Enter first name" name="first_name" type="text"
                                       value={{ old('first_name') }}>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">

                                <label>Middle Name</label>
                                <input class="form-control" id="middle_name" placeholder="Enter middle name" name="interest_rate" type="text">
                                @if ($errors->has('middle_name'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('middle_name') }}</strong>
                                            </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

                                <label>Last Name</label>
                                <input class="form-control" id="last_name" placeholder="Enter last name" name="last_name" type="text"
                                       value="{{ old('last_name') }}">
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <label>Email</label>
                                <input class="form-control" id="email" placeholder="Enter email address" name="email" type="email"
                                       value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">

                                <label>Date Created</label>
                                <input class="form-control" name="year"  value="{{date('jS F, Y')}}" type="text">
                                @if ($errors->has('year'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('year') }}</strong>
                                            </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">

                                <label>Phone Number</label>
                                <input class="form-control" placeholder="Enter the phone number" name="phone_number" type="text"
                                       value="{{ old('phone_number') }}">
                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('status_id') ? ' has-error' : '' }}">

                                <label>Status</label>
                                <select id="status" onchange="dropdown()" class="form-control" name="status_id">
                                    <option value="">-- select one --</option>
                                    @foreach($status as $status_id)
                                        <option>{{$status_id->status_description}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('status_id'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('status_id') }}</strong>
                                            </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">

                                <label id="role_label" class="hidden">Position</label>
                                <input id="role_field" class="form-control hidden" placeholder="Enter the position of member" name="role" type="text"
                                       value="{{ old('role') }}">
                                @if ($errors->has('role'))
                                    <span class="help-block">
                                                        <strong>{{ $errors->first('role') }}</strong>
                                                    </span>
                                @endif
                            </div>
                            <div>
                                <input id="" class="form-control hidden" value="1" name="approved" type="number">
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
                            <div class="form-group">
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                </div>
                            </div>

                            <!--- Calculating the auto fill values-->
                            <script>

                                function dropdown(status) {
                                    switch(status.value) {
                                        case 'Executive Member':
                                            $("#role_field, #role_label").removeClass("hidden");
                                        break;
                                    }
                                }
                            </script>

                        </form>
                    </div>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

@endsection
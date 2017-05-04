@extends('layouts.members')

@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"> <b>Current Alumni</b></div>

                <div class="panel-body">
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
                            <th data-field="status" data-sortable="true"> Status</th>
                            <th data-field="role" data-sortable="true"> Position</th>
                            <th data-field="phoneNumber" data-sortable="true">Phone Number</th>
                            <th data-field="deleteEdit" data-sortable="true">Delete | Edit</th>
                        </tr>
                        </thead>
                        @foreach( $alumni as $member)
                            <tr>
                                <td>
                                    @if(isset($alumni))
                                        {{$member->first_name}}
                                    @endif
                                </td>
                                <td>
                                    @if(isset($alumni))
                                        {{$member->last_name}}
                                    @endif
                                </td>
                                <td>
                                    @if(isset($alumni))
                                        {{$member->email}}
                                    @endif
                                </td>
                                <td>
                                    @if(isset($alumni))
                                        {{$member->year}}
                                    @endif

                                </td>
                                <td>
                                    @if(isset($alumni))
                                        {{$member->status_id}}
                                    @endif

                                </td>
                                <td>
                                    @if(isset($alumni))
                                        {{$member->role}}
                                    @endif

                                </td>
                                <td>
                                    @if(isset($alumni))
                                        {{$member->phone_number}}
                                    @endif

                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-default btn-xs" href="#"
                                           type="button" name="toggle" title="delete"><i class="glyphicon glyphicon glyphicon-trash"></i>
                                        </a>

                                        <a href="#" class="btn btn-sm btn-link">Edit</a>
                                    </div>
                                </td>
                            </tr>
                            {{--@endfor--}}
                        @endforeach
                    </table>

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
                    </script> <!--/. script-->

                    <script>
                        function delete_user(user, man) {
                            var xhttp;
                            if (window.XMLHttpRequest) {
                                xhttp = new XMLHttpRequest();
                            } else {
                                // code for IE6, IE5
                                xhttp = new ActiveXObject("Microsoft.XMLHTTP");
                            }
                            if (confirm("Are you sure you want to delete " + user + "?")) {
                                xhttp.open("GET", "{{url('delete_user')}}/" + man, false);
                                xhttp.send();
                                alert(user + " has been deleted!");
                                location.reload();
                            }
                        }
                    </script>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <a class="btn btn-primary pull-right" href="{{url('/alumni/viewAddAlumni')}}">Add New Alumni</a>
    </div>

@endsection
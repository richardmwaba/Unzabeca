@extends('layouts.webview')
@section('title', 'Join Us')
	@section('content')

		<section class="page-header-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-header">
							<h1>Join Us</h1>
						</div>
						<ol class="breadcrumb">
							<li><a href="{{url('/')}}">Home</a></li>
							<li class="active">Join Us</li>
						</ol>
					</div>
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</section>

		<div class="container">
			<div class="content-wrapper">
				<div class="contact-us-wrapper">


							<div class="contact-us-form">

								<h2>Fill in your details below</h2>


								<form id="" action="{{url('members/join/save')}}" role="form" method="POST">
									{!! csrf_field() !!}

									<div class="row">
										<div class="col-md-6">
											<div class="input-group">
												<label class="sr-only" for="first_name">First Name</label>
												<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
												<input id="first_name" name="first_name" type="text" class="form-control"  required="" placeholder="First Name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-group">
												<label class="sr-only" for="middle_name">Middle Name</label>
												<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
												<input id="middle_name" name="middle_name" type="text" class="form-control"  required="" placeholder="Middle Name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-group">
												<label class="sr-only" for="last_name">Last Name</label>
												<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
												<input id="last_name" name="last_name" type="text" class="form-control"  required="" placeholder="Last Name">
											</div>
										</div>
										<div class="col-md-6">
										  <div class="input-group">
										    <label class="sr-only" for="email">Email address</label>
										    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-envelope"></i></span>
										    <input id="email" name="email" type="email" class="form-control" required="" placeholder="Email">
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="input-group">
										    <label class="sr-only" for="phone">Phone</label>
										    <span class="input-group-addon" id="basic-addon3"><i class="fa fa-phone"></i></span>
										    <input id="phone" name="phone_number" type="text" class="form-control" placeholder="Phone" required>
										  </div>
										</div>
										<div class="col-md-6">
											<div class="input-group">
												<label class="sr-only" for="year">Year</label>
												<span class="input-group-addon" id="basic-addon3"><i class="fa fa-clock-o"></i></span>
												<input id="year" name="year" type="number" class="form-control" placeholder="enter the year. eg 2010" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-group">
												<label class="sr-only" for="status">Status</label>
												<span class="input-group-addon" id="basic-addon3"><i class="fa fa-comment"></i></span>
												<select id="status_id" onchange="dropdowns(this,document.getElementById('position_id'))" class="form-control" name="status_id" required>
													<option value="">-- select your current member status --</option>
													@foreach($status as $status_id)
														<option value="{{$status_id->status_id}}">{{$status_id->status_description}}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="col-md-6">
											<div class="input-group">
												<label class="sr-only" for="position_id">Role</label>
												<span class="input-group-addon" id="basic-addon3"><i class="fa fa-tasks"></i></span>
												<select id="position_id" class="form-control" name="position_id">
													//Content is loaded from an external JavaScript file
												</select>
											</div>
										</div>

									</div>

									<button type="submit" class="btn btn-primary btn-lg">Submit</button>
								</form>
							</div>
				</div><!-- /.content-wrapper -->
			</div><!-- /.content-wrapper -->
		</div><!-- /.container -->

				@endsection
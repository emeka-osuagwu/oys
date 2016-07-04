@extends('template')
@section('content')
<link rel="stylesheet" href="{{URL::asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.min3f0d.css?v2.2.0')}}">
<link rel="stylesheet" href="{{URL::asset('assets/examples/css/forms/advanced.min3f0d.css?v2.2.0')}}">
<link rel="stylesheet" href="{{URL::asset('global/vendor/bootstrap-select/bootstrap-select.min3f0d.css?v2.2.0')}}">
<?php $status = ['Yet To Pay', 'Part Paid', 'Paid', 'Remitted']?>
<!-- Page -->
<div class="page animsition">
	<div class="page-header">
		<h1 class="page-title">MY PROPERTIES</h1>
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/')}}">Home</a></li>
			<li class="active"><a href="javascript:void(0)">My Properties</a></li>

		</ol>

	</div>
	<div class="page-content">
		<!-- Panel Basic -->
		<div class="panel">
			<header class="panel-heading" style="display:none;">
				<div class="panel-actions"></div>
				<h3 class="panel-title">Basic</h3>
			</header>
			<div class="panel-body">
				<table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
					<thead>
						<tr>

							<th>Title</th>
							<th>Type</th>
							<th>Address</th>
							<th>City</th>
							<th>State</th>
							<th>Description</th>
							<th>Price</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tfoot>
						<tr>

							<th>Title</th>
							<th>Type</th>
							<th>Address</th>
							<th>City</th>
							<th>State</th>
							<th>Description</th>
							<th>Price</th>
							<th>Actions</th>

						</tr>
					</tfoot>
					<tbody>
						@foreach($properties as $property)
						<tr>
							<td><a href="{{URL::to('property/rents/'.$property->id)}}">{{$property->title}}</a></td>
							<td>{{$property->type}}</td>
							<td>{{$property->address}}</td>
							<td>{{$property->city}}</td>
							<td>{{$property->state}}</td>
							<td>{{$property->description}}</td>
							<td>{{number_format($property->price)}}</td>
							<td><a data-toggle="modal" data-target="#myModal{{$property->id}}" class="btn btn-success">
								<i class="fa fa-plus" aria-hidden="true"></i></a></td>
							</tr>
							@endforeach
					</tbody>
				</table>
			</div>
		</div>
		@foreach($properties as $property)
		<!-- Modality -->
		<div class="modal fade" id="myModal{{$property->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content" style="padding:20px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Add Rented Apartment to : {{$property->description}}</h4>
					</div>
					<section class="card" style="padding:10px;">
						<div class="card-block">
							<form class="form-horizontal" action="{{ URL::to('property/rent/create') }}"  method="Post">
								<input type="hidden" name="propertyid" value="{{$property->id}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="row">
									<div class="col-xs-12">
										<fieldset class="form-group">
											<label class="form-label">Occupant</label>
											<input type="text" class="form-control" placeholder="Occupant's Name" name="name" id="date-mask-input" data-validation="optional">
										</fieldset>
									</div>
									<div class="col-lg-12">
										<fieldset class="form-group">
											<label class="form-label" >Occupant's Email</label>
											<input type="text" class="form-control" placeholder="Occupant's Email" name="email" id="date-mask-input" data-validation="optional email">
										</fieldset>
									</div>
								</div><!--.row-->

									<div class="row">
										<div class="col-xs-12">
											<fieldset class="form-group">
												<label class="form-label">Description</label>
												<textarea rows="5" class="form-control " name= "description" placeholder="descripion"maxlength="300"></textarea>
											</fieldset>
										</div>
										<div class="col-lg-12">
											<fieldset class="form-group">
												<label class="form-label" >Expiry</label>
												<input type="date" class="form-control" placeholder="Expiry Date" name="expiry" id="date-mask-input" data-validation="required" required>
											</fieldset>
										</div>
									</div><!--.row-->
									<div class="row">
										<div class="col-lg-12">
											<fieldset class="form-group">
												<label class="form-label" >Actual Rent</label>
												<input type="number" class="form-control"  placeholder="Actual Rent" name ="actual_rent" data-validation="required" required>
											</fieldset>
										</div>

										<div class="col-lg-12">
											<fieldset class="form-group">
												<label class="form-label">Rent Paid</label>
												<input type="number" class="form-control" placeholder="Type Rent Paid" name="rent_paid" data-validation="required" required>
											</fieldset>
										</div>
										<div class="col-lg-12">
											<fieldset class="form-group">
												<label class="form-label">Minimum Rent Tenor</label>
												<select data-plugin="selectpicker" name="tenor" required="" class="form-control">
													<option value="">Choose One</option>
													<option value="0">Monthly</option>
													<option value="1">Quaterly</option>
													<option value="2">Biannually</option>
													<option value="3">Yearly</option>

												</select>
											</fieldset>
										</div>
									</div>

									<center>
										<div class="btn-group">
											<button type="submit" class="btn btn-rounded btn-success sign-up">Submit</button>
											<button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
										</div>
									</center>
								</form>

						</section>
					</div>
				</div>
			</div>

			@endforeach


		@endsection

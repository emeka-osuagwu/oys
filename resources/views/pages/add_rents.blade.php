@extends('template')
@section('content')
<link rel="stylesheet" href="{{URL::asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.min3f0d.css?v2.2.0')}}">
<link rel="stylesheet" href="{{URL::asset('assets/examples/css/forms/advanced.min3f0d.css?v2.2.0')}}">
<link rel="stylesheet" href="{{URL::asset('global/vendor/bootstrap-select/bootstrap-select.min3f0d.css?v2.2.0')}}">


<!-- Page -->
<div class="page animsition">
	<div class="page-header">
		<h1 class="page-title">Add Rent</h1>
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/')}}">Home</a></li>
			<li><a href="javascript:void(0)">My Savings</a></li>
			<li class="active">New Rent</li>
		</ol>

	</div>
	
	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<!-- Panel Static Lables -->
				<div class="panel">

					<div class="panel-body container-fluid">
						<img src="{{URL::asset('assets/images/addrent.jpg')}}" class="img-responsive"/>
					</div>
				</div>
				<!-- End Panel Static Lables -->
			</div>

			<div class="col-sm-6">
				<!-- Panel Floating Lables -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">New Rent Form</h3>
					</div>
					<div class="panel-body container-fluid">
						<form autocomplete="off" action="{{ URL::to('rent/create') }}" method="post">
							{!! csrf_field() !!}
							<div class="form-group form-material floating">
								<textarea rows="5" class="form-control " name= "description" maxlength="300" required=""></textarea>
								<label class="floating-label">Description</label>
							</div>
							<div class="form-group form-material floating">
								<input type="text" class="form-control" name="expiry" required="" data-plugin="datepicker"/>
								<label class="floating-label">Expiry</label>
							</div>
							<div class="form-group form-material floating">
								<input type="text" class="form-control formatt" name="actual_rent" required=""/>
								<label class="floating-label">Rent Amount</label>
							</div>
							<div class="form-group form-material floating">
								<input type="text" class="form-control formatt" name="rent_paid" required=""/>
								<label class="floating-label">Already Paid</label>
							</div>
							<div class="form-group form-material floating">
								<label class="floating-label">Minimum Rent Tenor</label>
								<select data-plugin="selectpicker" name="tenor" required="" class="form-control">
									<option value="">Choose One</option>
									<option value="0">Monthly</option>
									<option value="1">Quaterly</option>
									<option value="2">Biannually</option>
									<option value="3">Yearly</option>

								</select>
							</div>



							<button type="submit" class="btn btn-primary btn-block">Submit</button>

						</form>
					</div>
				</div>
				<!-- End Panel Floating Lables -->
			</div>
		</div>
	</div>
</div>
<!-- End Page -->
@endsection

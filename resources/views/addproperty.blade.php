@extends('template')
@section('content')
<link rel="stylesheet" href="{{URL::asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.min3f0d.css?v2.2.0')}}">
<link rel="stylesheet" href="{{URL::asset('assets/examples/css/forms/advanced.min3f0d.css?v2.2.0')}}">
<link rel="stylesheet" href="{{URL::asset('global/vendor/bootstrap-select/bootstrap-select.min3f0d.css?v2.2.0')}}">


<!-- Page -->
<div class="page animsition">
	<div class="page-header">
		<h1 class="page-title">Add A New Property</h1>
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/')}}">Home</a></li>
			<li><a href="javascript:void(0)">My Savings</a></li>
			<li class="active">New Property</li>
		</ol>

	</div>
	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<!-- Panel Static Lables -->
				<div class="panel">

					<div class="panel-body container-fluid">
						<img src="{{URL::asset('assets/images/addproperty.jpg')}}" class="img-responsive"/>
					</div>
				</div>
				<!-- End Panel Static Lables -->
			</div>

			<div class="col-sm-6">
				<!-- Panel Floating Lables -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">New Property Form</h3>
					</div>
					<div class="panel-body container-fluid">
						<form autocomplete="off" action="{{ URL::to('property/create') }}" method="post">
							{!! csrf_field() !!}
							<div class="form-group form-material floating">
								<input type="text" class="form-control" name="title" required=""/>
								<label class="floating-label">Property Title</label>
							</div>
							<div class="form-group form-material floating">
								<input type="text" class="form-control" name="type" required=""/>
								<label class="floating-label">Property Type</label>
							</div>
							<div class="form-group form-material floating">
								<input type="text" class="form-control" name="address" required=""/>
								<label class="floating-label">Address</label>
							</div>
							<div class="form-group form-material floating">
								<input type="text" class="form-control" name="city" required=""/>
								<label class="floating-label">City</label>
							</div>
							<div class="form-group form-material floating">
								<input type="text" class="form-control" name="state" required=""/>
								<label class="floating-label">State</label>
							</div>
							<div class="form-group form-material floating">
								<input type="text" class="form-control formatt" name="price"/>
								<label class="floating-label">Market Valuation</label>
							</div>
							<div class="form-group form-material floating">
								<textarea rows="5" class="form-control " name= "description" maxlength="300" required=""></textarea>
								<label class="floating-label">Description</label>
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

@extends('template')
@section('content')
<link rel="stylesheet" href="{{URL::asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.min3f0d.css?v2.2.0')}}">
<link rel="stylesheet" href="{{URL::asset('assets/examples/css/forms/advanced.min3f0d.css?v2.2.0')}}">
<link rel="stylesheet" href="{{URL::asset('global/vendor/bootstrap-select/bootstrap-select.min3f0d.css?v2.2.0')}}">


<!-- Page -->
<div class="page animsition">
	<div class="page-header">
		<h1 class="page-title">Create Your Saving</h1>
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/')}}">Home</a></li>
			<li><a href="javascript:void(0)">My Savings</a></li>
			<li class="active">New Savings</li>
		</ol>

	</div>
	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<!-- Panel Static Lables -->
				<div class="panel">

					<div class="panel-body container-fluid">
						<img src="{{URL::asset('assets/images/savings2.jpg')}}" class="img-responsive"/>
					</div>
				</div>
				<!-- End Panel Static Lables -->
			</div>

			<div class="col-sm-6">
				<!-- Panel Floating Lables -->
				<div class="panel">
					<div class="panel-heading">
						<h3 class="panel-title">New Savings Form</h3>
					</div>
					<div class="panel-body container-fluid">
						<form autocomplete="off" action="{{URL::to('savings')}}" method="post">
							{!! csrf_field() !!}
							<div class="form-group form-material floating">
								<input type="text" class="form-control formatt" name="target" required=""/>
								<label class="floating-label">Target Amount</label>
							</div>
							<div class="example-wrap">
								<div class="form-group form-material floating example">
									<h4 class="example-title">Tenor</h4>
									<select data-plugin="selectpicker" name="tenor" required="">
										<option value="">Choose One</option>
										<option value="30">30 Days</option>
										<option value="90">3 Months</option>
										<option value="180">6 Months</option>
										<option value="270">9 Months</option>
										<option value="365">1 Year</option>
									</select>
								</div>
							</div>
							<div class="form-group form-material floating">
								<input type="text" class="form-control" name="accountno" required=""/>
								<label class="floating-label">Bank Account Number</label>
							</div>
							<div class="form-group form-material floating">
								<input type="text" class="form-control" name="accountname" required=""/>
								<label class="floating-label">Bank Account Name</label>
							</div>
							<div class="form-group form-material floating">
								<input type="text" class="form-control" name="accountbank" required=""/>
								<label class="floating-label">Bank</label>
							</div>

							<div class="form-group form-material floating" style="display:none;">
								<input type="text" class="form-control" data-plugin="datepicker" name="expiry" required="">
								<label class="floating-label">Till When?</label>
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

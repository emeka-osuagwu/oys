@extends('template')
@section('content')
<link rel="stylesheet" href="{{URL::asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.min3f0d.css?v2.2.0')}}">
<link rel="stylesheet" href="{{URL::asset('assets/examples/css/forms/advanced.min3f0d.css?v2.2.0')}}">
<link rel="stylesheet" href="{{URL::asset('global/vendor/bootstrap-select/bootstrap-select.min3f0d.css?v2.2.0')}}">
<?php $status = ['Yet To Pay', 'Part Paid', 'Paid', 'Remitted']?>
<!-- Page -->
<div class="page animsition">
	<div class="page-header">
		<h1 class="page-title">MY RENTS</h1>
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/')}}">Home</a></li>
			<li class="active"><a href="javascript:void(0)">My Rents</a></li>

		</ol>

	</div>
	<div class="page-content">
		<!-- Panel Basic -->
		<div class="panel">
			<header class="panel-heading">
				<div class="panel-actions"></div>
				<h3 class="panel-title">Basic</h3>
			</header>
			<div class="panel-body">
				<table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
					<thead>
						<tr>

							<th>Description</th>
							<th>Actual Rent</th>
							<th>Rent Paid</th>
							<th>Expiry</th>
							<th>Status</th>
							<th>Pay</th>
						</tr>
					</thead>
					<tfoot>
						<tr>

							<th>Description</th>
							<th>Actual Rent</th>
							<th>Rent Paid</th>
							<th>Expiry</th>
							<th>Status</th>
							<th>Pay</th>
						</tr>
					</tfoot>
					<tbody>
						@foreach($rents as $rent)
						<tr>
							<td>{{$rent->description}}</td>
							<td>{{number_format($rent->actual_rent)}}</td>
							<td>{{number_format($rent->rent_paid)}}</td>
							<td>{{Carbon\Carbon::parse($rent->expiry)->toFormattedDateString()}}</td>
							<td>{{$status[$rent->status]}}</td>

							<td>
								@if(isset($rent->property->user_id))
								<a data-toggle="modal" data-target="#myModal{{$rent->id}}" class="btn btn-success">Pay</a>
								@else
									<a data-toggle="modal" data-target="#myModal{{$rent->id}}" class="btn btn-success">Mark As Paid</a>
								@endif
							</td>

						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		@foreach($rents as $rent)
		<!-- Modality -->
		<div class="modal fade" id="myModal{{$rent->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Pay Rent (₦)</h4>
					</div>
					<form action="{{ url('rent/pay') }}" class="form-horizontal"  method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="modal-body">
							<div class="form-group form-material floating">
								<label class="floating-label">Rent Payment Duration</label>
								<select data-plugin="selectpicker" name="tenor" required="" class="form-control">
									<option value="">Please Choose Payment Tenor</option>
									@if($rent->tenor == '0')
									<option value="{{$rent->actual_rent/12}}">Pay for a month ({{number_format($rent->actual_rent/12)}})</option>
									<option value="{{$rent->actual_rent/4}}">Pay for a  Quater ({{number_format($rent->actual_rent/4)}})</option>
									<option value="{{$rent->actual_rent/6}}">Pay for 6 Months ({{number_format($rent->actual_rent/6)}})</option>
									<option value="{{$rent->actual_rent}}">Pay for a Year ({{number_format($rent->actual_rent)}})</option>
									@endif
									@if($rent->tenor == '1')
									<option value="{{$rent->actual_rent/4}}">Pay for a  Quater ({{number_format($rent->actual_rent/4)}})</option>
									<option value="{{$rent->actual_rent/6}}">Pay for 6 Months ({{number_format($rent->actual_rent/6)}})</option>
									<option value="{{$rent->actual_rent}}">Pay for a Year ({{number_format($rent->actual_rent)}})</option>
									@endif
									@if($rent->tenor == '2')
									<option value="{{$rent->actual_rent/6}}">Pay for 6 Months ({{number_format($rent->actual_rent/6)}})</option>
									<option value="{{$rent->actual_rent}}">Pay for a Year ({{number_format($rent->actual_rent)}})</option>
									@endif
									@if($rent->tenor == '3')
									<option value="{{$rent->actual_rent}}">Pay for a Year ({{number_format($rent->actual_rent)}})</option>
									@endif

								</select>
							</div>
							<br>
							<input name="rent" type="hidden" value="{{$rent->id}}"/>
							<!-- Only allowing numbers from 1 to 100 -->

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Pay Now</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		@endforeach


		@endsection

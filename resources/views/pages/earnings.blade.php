@extends('template')
@section('content')
<?php $tenor = ['1 Month', '1 Quarter', '6 Months', '1 Year']?>
<?php $status = ['Pending', 'Payout Requested', 'Paid To You']?>
<!-- Page -->
<div class="page animsition">
	<div class="page-header">
		<h1 class="page-title">MY EARNINGS</h1>
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/')}}">Home</a></li>
			<li class="active"><a href="javascript:void(0)">MY EARNINGS RECORD</a></li>

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
				<div class="row">
					<div class="col-md-4">
						<!-- Widget -->
						<div class="widget">
							<div class="widget-content padding-35 bg-white clearfix">
								<div class="pull-left white">
									<i class="icon icon-circle icon-2x wb-clipboard bg-red-600" aria-hidden="true"></i>
								</div>
								<div class="counter counter-md counter">
									<div class="counter-number-group">
										<span class="counter-number">NGN {{number_format( $earnings->where('status', '<', '2')->sum('AMOUNT') )}}</span>
										<span class="counter-number-related text-capitalize"></span>
									</div>
									<div class="counter-label text-capitalize font-size-16">Balance</div>
								</div>
							</div>
						</div>
						<!-- End Widget -->
					</div>

					<div class="col-md-8">
						<!-- Widget -->

						<!-- End Widget -->
					</div>
				</div>
				<table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
					<thead>
						<tr>
							<th>Property</th>
							<th>Rent</th>
							<th>Amount (NGN)</th>
							<th>Tenor</th>
							<th>Pay Date</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>

							<th>Property</th>
							<th>Rent</th>
							<th>Amount (NGN)</th>
							<th>Tenor</th>
							<th>Pay Date</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						@foreach(Auth::user()->earnings()->get() as $earning)
						<tr>
							<td>{{$earning->rent->property->title}}</td>
							<td>{{$earning->rent->description}}</td>
							<td>{{number_format($earning->amount)}}</td>
							<td>{{$tenor[$earning->tenor]}}</td>
							<td>{{Carbon\Carbon::parse($earning->created_at)->toFormattedDateString()}}</td>
							<td>{{$status[$earning->status]}}</td>
							<td>
								@if($earning->status == '0')
								<form class="form-horizontal" action="{{ URL::to('request/payout') }}"  method="Post">
									<input type="hidden" name="earning" value="{{$earning->id}}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<button type="submit" class="btn btn-rounded btn-success sign-up">Request Payout</button>
								</form>
								@endif
							</td>


						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>



		@endsection

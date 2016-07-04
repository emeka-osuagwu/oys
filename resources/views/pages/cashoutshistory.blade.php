@extends('template')
@section('content')
<?php $status = ['Pending', 'Approved', 'Paid', 'Cancelled']?>
<!-- Page -->
<div class="page animsition">
	<div class="page-header">
		<h1 class="page-title">MY CASHOUTS HISTORY</h1>
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/')}}">Home</a></li>
			<li class="active"><a href="javascript:void(0)">My Cashout History</a></li>

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

							<th>Amount (NGN)</th>
							<th>Request Date</th>
							<th>Status</th>
							<th>Pay Date</th>

						</tr>
					</thead>
					<tfoot>
						<tr>

							<th>Amount (NGN)</th>
							<th>Request Date</th>
							<th>Status</th>
							<th>Pay Date</th>

						</tr>
					</tfoot>
					<tbody>
						@foreach($cashouts as $cashout)
						<tr>
							<td>{{number_format($cashout->amount)}}</td>
							<td>{{Carbon\Carbon::parse($cashout->created_at)->toFormattedDateString()}}</td>
							<td>{{$status[$cashout->status]}}</td>
							<td>@if($cashout->paydate == NULL) @else {{Carbon\Carbon::parse($cashout->paydate)->toFormattedDateString()}} @endif</td>

						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>



		@endsection

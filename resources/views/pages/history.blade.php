@extends('template')
@section('content')

<!-- Page -->
<div class="page animsition">
	<div class="page-header">
		<h1 class="page-title">MY SAVINGS HISTORY</h1>
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/')}}">Home</a></li>
			<li class="active"><a href="javascript:void(0)">My Savings History</a></li>

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
							<th>Reference</th>
							<th>Pay Date</th>

						</tr>
					</thead>
					<tfoot>
						<tr>

							<th>Amount (NGN)</th>
							<th>Reference</th>
							<th>Pay Date</th>

						</tr>
					</tfoot>
					<tbody>
						@foreach($payments as $payment)
						<tr>
							<td>{{number_format($payment->amount)}}</td>
							<td>{{$payment->reference}}</td>
							<td>{{Carbon\Carbon::parse($payment->paydate)->toFormattedDateString()}}</td>

						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>



		@endsection

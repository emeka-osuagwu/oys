@extends('template')
@section('content')
<?php $status = ['Yet To Pay', 'Part Paid', 'Paid', 'Remitted']?>
<!-- Page -->
<div class="page animsition">
	<div class="page-header">
		<h1 class="page-title">MY RENTS</h1>
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/')}}">Home</a></li>
			<li class="active"><a href="javascript:void(0)">Savings: Payment Status</a></li>

		</ol>

	</div>
	<div class="page-content">
		<!-- Panel Basic -->
		<div class="panel">
			<header class="panel-heading">
				<div class="panel-actions"></div>
				<h3 class="panel-title">Payment Status</h3>
			</header>
			<div class="panel-body">


				<h3>Amount:₦{{number_format($payment->amount)}}</h3>


				<table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
					<thead>
						<tr class="editablerow">
							<th>Transaction Ref</th>
							<th>Total Amount ₦ </th>
							<th>Status</th>
							<th>Message</th>

						</tr>
					</thead>
					<tbody>

						<tr style="color: #2a2a2a;">
							<td>{{$payment->reference}}</td>
							<td>{{number_format($payment->amount)}}</td>
							<td>@if (Session::has('error'))
								<span class="danger" style="color:red"> {{ Session::get('error') }} </span>
								@endif
								@if (Session::has('status'))
								<span class="info" style="color:green"> {{ Session::get('status') }} </span>
								@endif
							</td>
							<td>@if (Session::has('error_more'))
								<span class="danger" style="color:red"> {{ Session::get('error_more') }} </span>
								@endif
								@if (Session::has('success'))
								<span class="info" style="color:green"> {{ Session::get('success') }} </span>
								@endif
							</td>
						</tr>
					</tbody>
				</table>


			</div>


		</div>
	</div>

	@endsection

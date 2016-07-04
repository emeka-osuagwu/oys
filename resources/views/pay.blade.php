
@extends('template')
@section('content')
<?php $status = ['Yet To Pay', 'Part Paid', 'Paid', 'Remitted']?>
<!-- Page -->
<div class="page animsition">
	<div class="page-header">
		<h1 class="page-title">Savings TopUp</h1>
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/')}}">Home</a></li>
			<li class="active"><a href="javascript:void(0)">Amount: NGN{{number_format($payment->amount)}}</a></li>

		</ol>

	</div>
	<div class="page-content">
		<!-- Panel Basic -->
		<div class="panel">
			<header class="panel-heading">
				<div class="panel-actions"></div>
				<h3 class="panel-title">Top Up: Amount: NGN{{number_format($payment->amount)}}</h3>
			</header>
			<div class="panel-body">


				<div class="prices-page-bottom">
					<?php session(['paymentid' => $payment->id]); ?>



					<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
						<div class="row" style="margin-bottom:40px;">
							<div class="col-md-8 col-md-offset-2">
								<h3>Pay with your Debit/Credit Card.</h3>
								<input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
								<input type="hidden" name="orderID" value="{{$payment->id}}">
								<input type="hidden" name="amount" value="{{$payment->amount *100}}"> {{-- required in kobo --}}
								<input type="hidden" name="quantity" value="1">
								<input type="hidden" name="reference" value="{{ $payment->reference }}"> {{-- required --}}
								<input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
								{{ csrf_field() }}


								<p>
									<button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
										<i class="fa fa-plus-circle fa-lg"></i> Pay Now!
									</button>
								</p>
							</div>
						</div>
					</form>
					<hr>
				</div>



			</div>


		</div>

	</div>

	@endsection

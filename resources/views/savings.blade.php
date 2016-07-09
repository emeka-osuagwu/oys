@extends('template')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/examples/css/widgets/statistics.min3f0d.css?v2.2.0')}}">
<!-- Page -->
<div class="page animsition">
	<div class="page-header">
		<h1 class="page-title">My Savings</h1>
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/')}}">Home</a></li>
			<li class="active"><a href="javascript:void(0)">My Savings</a></li>

		</ol>

	</div>
	<div class="page-content container-fluid">
		<div class="row">

			<div class="col-lg-8 col-md-12">
				<div class="row">
					<div class="col-md-6">
						<!-- Widget -->
						<div class="widget">
							<div class="widget-content padding-35 bg-white clearfix">
								<div class="pull-left white">
									<i class="icon icon-circle icon-2x wb-clipboard bg-red-600" aria-hidden="true"></i>
								</div>
								<div class="counter counter-md counter text-right pull-right">
									<div class="counter-number-group">
										<span class="counter-number">NGN {{number_format($mysaving->balance)}}</span>
										<span class="counter-number-related text-capitalize"></span>
									</div>
									<div class="counter-label text-capitalize font-size-16">Balance</div>
								</div>
							</div>
						</div>
						<!-- End Widget -->
					</div>

					<div class="col-md-6">
						<!-- Widget -->
						<div class="widget">
							<div class="widget-content padding-35 bg-white clearfix">
								<div class="counter counter-md pull-left text-left">
									<div class="counter-number-group">
										<span class="counter-number">NGN {{number_format($mysaving->target)}}</span>
										<span class="counter-number-related text-capitalize"></span>
									</div>
									<div class="counter-label text-capitalize font-size-16">Target</div>
								</div>
								<div class="pull-right white">
									<i class="icon icon-circle icon-2x wb-users bg-blue-600" aria-hidden="true"></i>
								</div>
							</div>
						</div>
						<!-- End Widget -->
					</div>

					<div class="col-md-6">
						<!-- Widget -->
						<div class="widget">
							<div class="widget-content padding-30 bg-white">
								<div class="counter counter-md text-left">
									<div class="counter-label text-uppercase margin-bottom-5">Savings: last 30 days</div>
									<div class="counter-number-group margin-bottom-10">
										<span class="counter-number">NGN {{number_format($mysaving->payments()->where('status', '1')
											->whereDate('paydate', '<', Carbon\Carbon::today()->addDays('30')->toDateString())->sum('amount'))}}</span>
										</div>

									</div>
								</div>
							</div>
							<!-- End Widget -->
						</div>

						<div class="col-md-6">
							<!-- Widget -->
							<div class="widget">
								<div class="widget-content padding-30 bg-white">
									<div class="counter counter-md text-left">
										<div class="counter-label text-uppercase margin-bottom-5">Savings: last 90 days</div>
										<div class="counter-number-group margin-bottom-10">
											<span class="counter-number">NGN {{number_format($mysaving->payments()->where('status', '1')
												->whereDate('paydate', '<', Carbon\Carbon::today()->addDays('90')->toDateString())->sum('amount'))}}</span>
											</div>

										</div>
									</div>
								</div>
								<!-- End Widget -->
							</div>
							<div class="col-md-6">
								<!-- Widget -->
								<div class="widget">
									<div class="widget-content padding-30 bg-white">
										<div class="counter counter-md text-left">
											<div class="counter-label text-uppercase margin-bottom-5">Pending Cashout Request</div>
											<div class="counter-number-group margin-bottom-10">
												<span class="counter-number">NGN {{number_format($mysaving->cashouts()->where('status', '0')
													->first()->amount )}}</span>
												</div>

											</div>
										</div>
									</div>
									<!-- End Widget -->
								</div>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<!-- Widget -->
						<div class="widget">
							<div class="widget-content padding-30 bg-green-600 height-350"
							style="padding: 10px !important; padding-left:30px !important; padding-right:30px !important;">
								<div class="counter counter-lg counter-inverse">
									<div class="counter-label">
										<H2>SAVINGS TOP UP </H2>
										<form action="{{URL::to('topup')}}" method="post">
											{{ csrf_field() }}
											<div class="form-group">

												<input class="form-control formatt" name="amount" placeholder="Enter Amount" type="text" required="">
												<input name="saving" value="{{$mysaving->id}}" type="hidden">
												@if ($errors->has('amount'))
												<span class="help-block">
													<strong>{{ $errors->first('amount') }}</strong>
												</span>
												@endif
											</div>
											<button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
										</form>
										<H2>REQUEST CASHOUT </H2>
										<form action="{{URL::to('cashout')}}" method="post">
											{{ csrf_field() }}
											<div class="form-group">
												<input class="form-control formatt" name="amount" placeholder="Enter Amount" type="text"
												data-fv-between="true" data-fv-between-min="5000"
                        data-fv-between-max="{{$mysaving->balance}}" data-fv-between-message="please enter between[5000,{{$mysaving->balance}}]"
                        placeholder="range = [5000, {{$mysaving->balance}}]" required="">
												<input name="saving" value="{{$mysaving->id}}" type="hidden">
												@if ($errors->has('amount'))
												<span class="help-block">
													<strong>{{ $errors->first('amount') }}</strong>
												</span>
												@endif
											</div>
											<button type="submit" class="btn btn-primary btn-block" onclick="return confirm('Submiting this overwrites any pending cash out request, are you sure you want to continue?');">SUBMIT</button>
										</form>

										
									</div>

								</div>
							</div>
						</div>
						<!-- End Widget -->
					</div>





				</div>
			</div>
		</div>



		@endsection

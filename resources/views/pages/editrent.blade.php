@extends('template')
	@section('content')
<?php $tenor = ['Monthly', 'Quaterly', 'Biannually', 'Yearly']?>
	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Rents</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Edit Rents</a></li>

							</ol>
						</div>
					</div>
				</div>
			</header>

			<section class="card">
				<div class="card-block">
				 <form method="Post" action="{{ URL::to('rents/'.$rent->id.'/edit') }}" enctype="multipart/form-data">

                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<h6 class="with-border">Edit Rent</h6>
					<div class="row">
						<div class="row">
						<div class="col-xs-4">
							<fieldset class="form-group">
								<label class="form-label">Description</label>
								<textarea rows="5" class="form-control " name= "description" placeholder="descripion"maxlength="300" value="{{$rent->description}}"></textarea>
							</fieldset>
						</div>
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label" >Expiry</label>
								<input type="date" class="form-control" placeholder="Expiry Date" name="expiry" id="date-mask-input" value="{{$rent->expiry}}">
							</fieldset>
						</div>
					</div><!--.row-->
					<div class="row">
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label" >Actual Rent</label>
								<input type="number" class="form-control"  placeholder="Actual Rent" name ="actual_rent" value="{{$rent->actual_rent}}">
							</fieldset>
						</div>

						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label">Rent Paid</label>
								<input type="number" class="form-control" placeholder="Type Rent Paid" name="rent_paid" value="{{$rent->rent_paid}}">
							</fieldset>
						</div>
						<div class="form-group form-material floating">
							<label class="floating-label">Minimum Rent Tenor</label>
							<select data-plugin="selectpicker" name="tenor" required="" class="form-control">
								<option value="{{$rent->tenor}}">{{$tenor[$rent->tenor]}}</option>
								<option value="0">Monthly</option>
								<option value="1">Quaterly</option>
								<option value="2">Biannually</option>
								<option value="3">Yearly</option>

							</select>
						</div>
                         </div>

                    <center>
                      <div class="btn-group">
                        <button type="submit" class="btn btn-rounded btn-success sign-up">Submit</button>

                      </div>
                    </center>
                    </form>
                    </div>
			</section>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
@endsection

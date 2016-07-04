	@extends('template')
	@section('content')

	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Properties</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Edit Property</a></li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<section class="card">
				<div class="card-block">
				 <form method="POST" action="{{URL::to('property/'.$property->id.'/edit')}}" enctype="multipart/form-data">
				  
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<h6 class="with-border">Edit Property</h6>
					<div class="row">
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label" >Title</label>
								<input type="text" class="form-control" name="title" placeholder="Property Title" value="{{$property->title}}">
							</fieldset>
						</div>
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label" >Type</label>
								<input type="text" class="form-control" placeholder="Property Type" name="type" value="{{ $property->type}}">
							</fieldset>
						</div>
					</div><!--.row-->
					<div class="row">
						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label" >Address</label>
								<input type="text" class="form-control"  placeholder="Type Address" name ="address" value="{{$property->address}}">
							</fieldset>
						</div>

						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label">City</label>
								<input type="text" class="form-control" placeholder="Type City" name="city" value="{{$property->city}}">
								
							</fieldset>
						</div>

						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label">State</label>
								<input type="text" class="form-control" placeholder="Type State" name ="state" value="{{$property->state}}">
								
							</fieldset>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4">
							<fieldset class="form-group">
								<label class="form-label">Description</label>
								<textarea rows="5" class="form-control " name= "description" placeholder="descripion"maxlength="300" value="{{$property->description}}"></textarea>
							</fieldset>
						</div>

						<div class="col-lg-4">
							<fieldset class="form-group">
								<label class="form-label">Price</label>
								<input type="number" class="form-control" placeholder="Put a Price" name="price" value="{{$property->price}}">
							</fieldset>
						</div>
					</div>
				
				    <div class="row">
                    <center>
                      <div class="btn-group">
                        <button type="submit" class="btn btn-rounded btn-success sign-up">Submit</button>
                        
                      </div>
                    </center>
                    </div>
                    </form>
                    </div>
			</section>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
@endsection
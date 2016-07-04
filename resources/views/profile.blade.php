@extends('proftemplate')
@section('content')
	<div class="page-content">
		<div class="container-fluid">
			<div class="row">
				<form class="sign-box" role="form" method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}

                    <div class="sign-avatar no-photo">&plus;</div>
                    <header class="sign-title">Update Profile</header>
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <label class="sr-only">Name</label>
                        <input type="text" class="form-control" placeholder="Your Name" name="name" data-validation="required length" data-validation-length="3-100"/><br>

                     <label class="sr-only">Email</label>
                     <input type="email" class="form-control input-lg" placeholder="Email" name="email"  data-validation="required email"><br>
                  
					<label class="sr-only">Phone</label>
					<input type="text" class="form-control input-lg" placeholder="Phone" name="phone" data-validation="length" data-validation-length="7-200">

					<div class="col-md-12 form-group">
					<button type="submit" class="btn btn-primary">Update Profile </button

				    </div>

					
					

				
				</div><!--.col- -->

				
				
			</div><!--.row-->
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	@endsection
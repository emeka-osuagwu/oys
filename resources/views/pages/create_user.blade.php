
@extends('master')

@section('content')
	@include('pages.includes.sections.side_bar')
	<div class="content-page">
	    <!-- Start content -->
	    <div class="content">
	        <div class="container">

	  <div class="row">
	      <div class="col-sm-12">
	          <div class="panel panel-default">
	              <div class="panel-heading"><h3 class="panel-title">Form elements</h3></div>
	              <div class="panel-body">
	                  <form class="form-horizontal" role="form" action="{{ Url('user/create') }}" method="post">                                    

							<div class="form-group">
							  <label class="col-md-2 control-label" for="example-email">Name</label>
							  <div class="col-md-10">
							      <input type="text" id="example-email" name="name" class="form-control" placeholder="Name">
							  </div>
							</div>

							<div class="form-group">
							  <label class="col-md-2 control-label" for="example-email">Email</label>
							  <div class="col-md-10">
							      <input type="email" id="example-email" name="email" class="form-control" placeholder="Email">
							  </div>
							</div>

							<div class="form-group">
							  <label class="col-sm-2 control-label">Select Role</label>
							  <div class="col-sm-10">
							      <select class="form-control" required="" name="role">
							          <option value="3">Tenant Account</option>
							          <option value="2">Property Owner</option>
							          <option value="1">Admin</option>
							      </select>
							  </div>
							</div>

							<div class="form-group">
							  <div class="col-sm-10 pull-right">
								<button type="submit" class="btn btn-purple waves-effect waves-light">Add</button>  
							  </div>
							</div>
	     
	                  </form>
	              </div> <!-- panel-body -->
	          </div> <!-- panel -->
	      </div> <!-- col -->
	  </div> <!-- End row -->


	        </div> <!-- container -->
	                   
	    </div> <!-- content -->

	    @include('pages.includes.sections.footer')
	    
	    <!-- moment js  -->
	    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>

	    <!-- counters  -->
	    <script src="{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.js') }}"></script>
	    <script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

	    <!-- sweet alert  -->
	    <script src="{{ asset('assets/plugins/sweetalert/dist/sweetalert.min.js') }}"></script>


	    <!-- flot Chart -->
	    <script src="{{ asset('assets/plugins/flot-chart/jquery.flot.js') }}"></script>
	    <script src="{{ asset('assets/plugins/flot-chart/jquery.flot.time.js') }}"></script>
	    <script src="{{ asset('assets/plugins/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
	    <script src="{{ asset('assets/plugins/flot-chart/jquery.flot.resize.js') }}"></script>
	    <script src="{{ asset('assets/plugins/flot-chart/jquery.flot.pie.js') }}"></script>
	    <script src="{{ asset('assets/plugins/flot-chart/jquery.flot.selection.js') }}"></script>
	    <script src="{{ asset('assets/plugins/flot-chart/jquery.flot.stack.js') }}"></script>
	    <script src="{{ asset('assets/plugins/flot-chart/jquery.flot.crosshair.js') }}"></script>

	    <!-- todos app  -->
	    <script src="{{ asset('assets/pages/jquery.todo.js') }}"></script>

	    <!-- chat app  -->
	    <script src="{{ asset('assets/pages/jquery.chat.js') }}"></script>

	    <!-- dashboard  -->
	    <script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>

	    <script type="text/javascript">
	        jQuery(document).ready(function($) {
	            $('.counter').counterUp({
	                delay: 100,
	                time: 1200
	            });
	        });
	    </script>
	</div>
@endsection

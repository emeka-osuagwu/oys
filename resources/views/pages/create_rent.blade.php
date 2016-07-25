
@extends('master')

@section('content')
	@include('pages.includes.sections.side_bar')
	<div class="content-page">
	    <!-- Start content -->
	    <div class="content">
	        <div class="container">

	            <!-- Page-Title -->
	            <div class="row">
	                <div class="col-sm-12">
	                    <h4 class="pull-left page-title"></h4>
	                </div>
	            </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
	            <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title"></h3>Create Rent</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" action="{{ url('property/create') }}" method="post">                                    
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Title</label>
                                        <div class="col-md-10">
                                            <input type="text" name="title" class="form-control" required placeholder="Title">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="example-email">Price</label>
                                        <div class="col-md-10">
                                            <input type="number" name="price" id="example-email" class="form-control" placeholder="Price" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Address</label>
                                        <div class="col-md-10">
                                            <input type="text" name="address" class="form-control" placeholder="Address" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">City</label>
                                        <div class="col-md-10">
                                            <input type="text" name="city" class="form-control" placeholder="City" required>
                                        </div>
                                    </div>   

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">State</label>
                                        <div class="col-md-10">
                                            <input type="text" name="state" class="form-control" placeholder="State" required>
                                        </div>
                                    </div>   

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Type</label>
                                        <div class="col-md-10">
                                            <input type="text" name="type" class="form-control" placeholder="Type" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Description</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" name="description" placeholder="Description" ></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                     <div class="pull-right" style="margin-right:20px;">
                                     <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                     </div>
                                    </div>
                                   
                                </form>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col -->
                </div>



	        </div> <!-- container -->
	                   
	    </div> <!-- content -->

	    <footer class="footer text-right">
	        2015 © Moltran.
	    </footer>

	</div>
@endsection

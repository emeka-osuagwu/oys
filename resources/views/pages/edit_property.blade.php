
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
                            <div class="panel-heading"><h3 class="panel-title"></h3>Edit Property</div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" action="{{ url('property/update') }}" method="post">                                    
                                    
                                    <input type="text" name="property_id"  hidden="true" value="{{$property->id}}">
                                    <input type="text" name="user_id"  hidden value="{{$property->id}}">
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Title</label>
                                        <div class="col-md-10">
                                            <input type="text" name="title" class="form-control" required value="{{$property->title}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="example-email">Price</label>
                                        <div class="col-md-10">
                                            <input type="number" name="price" id="example-email" class="form-control" value="{{$property->price}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Address</label>
                                        <div class="col-md-10">
                                            <input type="text" name="address" class="form-control" value="{{$property->address}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">City</label>
                                        <div class="col-md-10">
                                            <input type="text" name="city" class="form-control" value="{{$property->city}}" required>
                                        </div>
                                    </div>   

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">State</label>
                                        <div class="col-md-10">
                                            <input type="text" name="state" class="form-control" value="{{$property->state}}" required>
                                        </div>
                                    </div>   

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Type</label>
                                        <div class="col-md-10">
                                            <input type="text" name="type" class="form-control" value="{{$property->type}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Description</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" name="description" value="{{$property->description}}" ></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                     <div class="pull-right" style="margin-right:20px;">
                                     <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
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

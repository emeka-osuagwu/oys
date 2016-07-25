
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
                            <div class="panel-heading"><h3 class="panel-title"></h3>Edit Rent</div>
                            <div class="panel-body">

                                <form class="form-horizontal" role="form" action="{{ url('rent/update') }}" method="post">                                    

                                    <input name="rent_id"  hidden value="{{$rent->id}}">
                                    
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Property</label>
                                        <div class="col-md-10">
                                            <select class="form-control" required="" name="property_id">
                                                @foreach($properties as $property)
                                                    <option value="{{$property->id}}">{{ $property->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Expiry</label>
                                        <div class="col-md-10">
                                            <input name="expiry" class="form-control" required value="{{$rent->expiry}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Tenor</label>
                                        <div class="col-md-10">
                                            <input type="text" name="tenor" class="form-control" required value="{{$rent->tenor}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Actual Rent</label>
                                        <div class="col-md-10">
                                            <input type="text" name="actual_rent" class="form-control" required value="{{$rent->actual_rent}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Rent Paid</label>
                                        <div class="col-md-10">
                                            <input type="text" name="rent_paid" class="form-control" required value="{{$rent->rent_paid}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Description</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" name="description" required value="{{$rent->description}}" ></textarea>
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

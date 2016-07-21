
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
	            <div class="row">
	                <div class="col-lg-12">
	                    <div class="btn-toolbar" role="toolbar">
	                        <div class="pull-right">
	                            <a href="{{ Url('property/create') }}" class="btn btn-purple waves-effect waves-light"> <span>Add Property</span> <i class="fa fa-send m-l-10"></i> </a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <br>
	            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Properties</h3>
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Price</th>
                                                        <th>Address</th>
                                                        <th>City</th>
                                                        <th>State</th>
                                                        <th>Type</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($properties as $property)
                                                    <tr>
                                                        <td>1</td>
                                                        <td>{{$property->title}}</td>
                                                        <td>{{$property->price}}</td>
                                                        <td>{{$property->address}}</td>
                                                        <td>{{$property->city}}</td>
                                                        <td>{{$property->state}}</td>
                                                        <td>{{$property->type}}</td>
                                                        <td>{{$property->description}}</td>
                                                    </tr>
                                                 	@endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



	        </div> <!-- container -->
	                   
	    </div> <!-- content -->

	    <footer class="footer text-right">
	        2015 © Moltran.
	    </footer>

	</div>
@endsection

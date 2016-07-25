
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
	            <br>

                <div class="panel">
                                            
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="m-b-30">
                                    <a href="{{ Url('property/create') }}" id="addToTable" class="btn btn-primary waves-effect waves-light">Add Property <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        @if($properties->count() > 0)
                            @foreach($properties as $property)
                                <table class="table table-bordered table-striped" id="datatable-editable">
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td>1</td>
                                            <td>{{$property->title}}</td>
                                            <td>{{$property->price}}</td>
                                            <td>{{$property->address}}</td>
                                            <td>{{$property->city}}</td>
                                            <td>{{$property->state}}</td>
                                            <td>{{$property->type}}</td>
                                            <td>{{$property->description}}</td>
                                            <td class="actions">
                                                <a href="{{ Url('property/' . $property->id . '/edit') }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="{{ Url('property/' . $property->id . '/delete') }}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach
                        @else
                            fvkfkj
                        @endif
                    </div>
                    <!-- end: page -->

                </div>





	        </div> <!-- container -->
	                   
	    </div> <!-- content -->

	    <footer class="footer text-right">
	        2015 © Moltran.
	    </footer>

	</div>
@endsection

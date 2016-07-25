
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
                                    <a href="{{ Url('rent/create') }}" id="addToTable" class="btn btn-primary waves-effect waves-light">Add rent <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        @if($rents->count() > 0)
                            @foreach($rents as $rent)
                                <table class="table table-bordered table-striped" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Property</th>
                                            <th>User</th>
                                            <th>Expiry At</th>
                                            <th>Tenor</th>
                                            <th>Status</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td>1</td>
                                            <td>{{$rent->property->title}}</td>
                                            <td>{{$rent->user->first_name}} {{$rent->user->last_name}}</td>
                                            <td>{{$rent->expiry}}</td>
                                            <td>{{$rent->tenor}}</td>
                                            <td>{{$rent->status}}</td>
                                            <td>{{$rent->description}}</td>
                                            <td class="actions">
                                                <a href="{{ Url('rent/' . $rent->id . '/edit') }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="{{ Url('rent/' . $rent->id . '/delete') }}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endforeach
                        @else
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Opps we currently don't have any properties to show at the moment. <a href="{{ Url('rent/create') }}" class="alert-link">Why don't you add some?</a>
                            </div>
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


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
	                    <h4 class="pull-left page-title">Create User</h4>
	                </div>
	            </div>

	            <div class="row">
	                
	                <!-- Left sidebar -->
	                <div class="col-md-4 col-lg-3">
	                    <a href="{{ Url('users') }}" class="btn btn-danger waves-effect waves-light btn-block">Back to Users</a>
	                    <div class="panel panel-default p-0 m-t-20">
	                        <div class="panel-body p-0">
	                            <div class="list-group mail-list">
	                              <a href="{{ Url('users') }}" class="list-group-item no-border "><i class="fa fa-download m-r-5"></i> Users <b>({{$all_users->count()}})</b></a>
	                              <a href="{{ Url('users/?admins=true') }}" class="list-group-item no-border"><i class="fa fa-download m-r-5"></i>Admins <b>({{$admins->count()}})</b></a>
	                              <a href="{{ Url('users/?property_owners=true') }}" class="list-group-item no-border"><i class="fa fa-download m-r-5"></i>Property Owner <b>({{$property_owner->count()}})</b></a>
	                              <a href="{{ Url('users/?tenant=true') }}" class="list-group-item no-border"><i class="fa fa-download m-r-5"></i>Tenant <b>({{$tenant->count()}})</b></a>
	                            </div>
	                        </div>
	                    </div>

	                    
	                </div>
	                <!-- End Left sidebar -->   
	                
	                <!-- Right Sidebar -->
	                <div class="col-md-8 col-lg-9">
	                	<form action="{{ Url('user/create') }}" method="post">
	                    <div class="row">
	                        <div class="col-lg-12">
	                            <div class="btn-toolbar" role="toolbar">
	                                <div class="pull-right">
	                                    <button class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fa fa-send m-l-10"></i> </button>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    
	                    <div class="panel panel-default m-t-20">
	                        <div class="panel-body p-t-30">
	                            
	                            <div role="form">
	                                <div class="form-group">
	                                    <input type="email" class="form-control" name="email" placeholder="Email">
	                                </div>
	                                <div class="form-group">
	                                    <div class="row">
	                                        <div class="col-md-6">
	                                            <input type="text" class="form-control" name="name" placeholder="Name">
	                                        </div>
	                                        <div class="col-md-6">
					                            <select class="form-control" required="" name="role">
					                                <option value="3">Tenant Account</option>
					                                <option value="2">Property Owner</option>
					                                <option value="1">Admin</option>
					                            </select>
	                                        </div>
										</div>
	                                </div>
	                            </div>
	                        </div> <!-- panel -body -->
	                        </form>
	                    </div> <!-- panel -->
	                </div> <!-- End Rightsidebar -->
	            
	            </div><!-- End row -->



	        </div> <!-- container -->
	                   
	    </div> <!-- content -->

	    <footer class="footer text-right">
	        2015 © Moltran.
	    </footer>

	</div>
@endsection

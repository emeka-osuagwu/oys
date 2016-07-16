
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
	                    <h4 class="pull-left page-title">Inbox</h4>
	                </div>
	            </div>

	            <div class="row">
	            
	                <!-- Left sidebar -->
	                <div class="col-lg-3 col-md-4">
	                    <a href="{{ Url('user/create') }}" class="btn btn-danger waves-effect waves-light btn-block">Add User</a>
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
	                    <h3 class="panel-title m-t-40">Labels</h3>
	                    <div class="panel panel-default p-0 p-t-20 m-t-20">
	                        <div class="panel-body p-0">
	                            <div class="list-group no-border">
	                              <a href="#" class="list-group-item no-border"><span class="fa fa-circle text-info pull-right"></span>Admins</a>
	                              <a href="#" class="list-group-item no-border"><span class="fa fa-circle text-warning pull-right"></span>Property Owners</a>
	                              <a href="#" class="list-group-item no-border"><span class="fa fa-circle text-purple pull-right"></span>Tenants</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- End Left sidebar -->
	            
	                <!-- Right Sidebar -->
	                <div class="col-lg-9 col-md-8">

	                    
	                    <div class="panel panel-default m-t-20">
	                        <div class="panel-body">
	                            <div class="table-responsive">
	                                <table class="table table-hover mails">
	                                    <tbody>
	                                    	@foreach($users as $user)
	                                        <tr>
	                                            <td class="mail-select">
	                                                <div class="checkbox checkbox-primary">
	                                                    <input id="checkbox1" type="checkbox" checked="checked">
	                                                    <label for="checkbox1"></label>
	                                                </div>
	                                            </td>
	                                            <td>
	                                                <a href="email-read.html">{{ $user->first()->name }}</a>
	                                            </td>
	                                            <td>
	                                                <a href="email-read.html">
	                                                	@if($user->first()->role == 1)
	                                                		<i class="fa fa-circle text-info m-r-15"></i>
	                                                	@elseif($user->first()->role == 2)
	                                                		<i class="fa fa-circle text-info m-r-15"></i>
	                                                	@elseif($user->first()->role == 3)
	                                                		<i class="fa fa-circle text-info m-r-15"></i>
	                                                	@endif
	                                                </a>
	                                            </td>
	                                            <td class="text-right">
	                                                {{$user->first()->created_at->diffForHumans()}}
	                                            </td>
	                                        </tr>
	                                        @endforeach

	                                    </tbody>
	                                </table>
	                            </div>
	                            
	                            <hr>
	                            
	                            <div class="row">
	                                <div class="col-xs-7">
	                                    Showing 1 - 20 of 289
	                                </div>
	                                <div class="col-xs-5">
	                                    <div class="btn-group pull-right">
	                                      <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
	                                      <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
	                                    </div>
	                                </div>
	                            </div>
	                        
	                        </div> <!-- panel body -->
	                    </div> <!-- panel -->
	                </div> <!-- end Col-9 -->
	            
	            </div><!-- End row -->



	        </div> <!-- container -->
	                   
	    </div> <!-- content -->

	    <footer class="footer text-right">
	        2015 © Moltran.
	    </footer>

	</div>
@endsection

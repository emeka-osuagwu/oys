@extends('template')

@section('content')

<link rel="stylesheet" href="{{URL::asset('global/vendor/bootstrap-datepicker/bootstrap-datepicker.min3f0d.css?v2.2.0')}}">
<link rel="stylesheet" href="{{URL::asset('assets/examples/css/forms/advanced.min3f0d.css?v2.2.0')}}">
<link rel="stylesheet" href="{{URL::asset('global/vendor/bootstrap-select/bootstrap-select.min3f0d.css?v2.2.0')}}">

<div class="page animsition">
	<div class="page-header">
		<h1 class="page-title">USERS</h1>
		<ol class="breadcrumb">
			<li><a href="{{URL::to('/')}}">Home</a></li>
			<li class="active"><a href="javascript:void(0)">My Properties</a></li>
		</ol>

	</div>
	<div class="page-content">
		@if($users->count() > 0)
		<!-- Panel Basic -->
		<div class="panel">
			<header class="panel-heading" style="display:none;">
				<div class="panel-actions"></div>
				<h3 class="panel-title">Basic</h3>
			</header>
			<div class="panel-body">
				<table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Role</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)	
							<tr class="link_to_member" link="{{$user->id}}">
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->role}}</td>
								<td>
									<a data-toggle="modal" data-target="#myModal{{$user->id}}" class="btn btn-success">
									<i class="fa fa-plus" aria-hidden="true"></i></a>
								</td>
							</tr>
						
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		@else
			<div class="alert alert-warning">Hi {{ucwords(Auth::user()->name)}} you have no properties on our platform </div>
		@endif


		@endsection

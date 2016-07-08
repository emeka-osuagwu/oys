@if($errors->any())
	<ul class="alert alert-info" style="list-style: none;">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>

@endif

@foreach (['danger', 'warning', 'success', 'info'] as $msg)
	@if(Session::has('alert-' . $msg))
		<div class="alert dark alert-icon alert-{{ $msg }} alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
			<i class="icon wb-close" aria-hidden="true"></i> {{ Session::get('alert-' . $msg) }}
		</div>
	@endif
@endforeach


<!-- <div class="alert dark alert-icon alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon wb-close" aria-hidden="true"></i> The daily report
  has failed
</div> -->
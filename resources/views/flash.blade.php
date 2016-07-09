@if($errors->any())
<ul class="alert alert-danger">
  @foreach($errors->any() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
@endif

@if (Session::has('message'))
<div class="alert alert-success">{{ Session::get('message') }}</div>
@endif

@if (Session::has('warning'))
<div class="alert alert-warning">{{ Session::get('warning') }}</div>
@endif

@if (Session::has('error'))
<div class="alert alert-danger">{{ Session::get('error') }}</div>
@endif

@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif

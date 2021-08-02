@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<span type="button" class="close" data-dismiss="alert">×</span>
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<span type="button" class="close" data-dismiss="alert">×</span>
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
	<span type="button" class="close" data-dismiss="alert">×</span>
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
	<span type="button" class="close" data-dismiss="alert">×</span>
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="row">
	<div class="alert alert-danger col-md-6 mx-auto text-center">
		<span type="button" class="close" data-dismiss="alert">×</span>
		@foreach ($errors->all() as $error)
		<div>{{ $error }}</div>
		@endforeach
	</div>
</div>
@endif

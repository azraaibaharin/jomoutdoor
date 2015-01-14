<!-- country name -->
<div class="form-group{{ $errors->first('name', ' has-error') }}">
	{{ $errors->first('name', '<label class="control-label" for="name">:message</label>') }}
	<label class="control-label" for="name">Name</label>
	{{ Form::text('name', isset($country) ? $country->name : '', ['placeholder' => 'Country name', 'class' => 'form-control']) }}
</div>

<!-- country overview -->
<div class="form-group{{ $errors->first('overview', ' has-error') }}">
	{{ $errors->first('overview', '<label class="control-label" for="overview">:message</label>') }}
	<label class="control-label" for="overview">Overview</label>
	{{ Form::textarea('overview', isset($country) ? $country->overview : '', ['placeholder' => 'Describe the country', 'class' => 'form-control', 'rows' => 5]) }}
</div>

<!-- country flag -->
<div class="form-group{{ $errors->first('flag', ' has-error') }}">
	{{ $errors->first('flag', '<label class="control-label" for="flag">:message</label>') }}
	<label class="control-label" for="flag">Flag</label>
	@if (isset($country))
		@if ($country->flag_name == '')
			<label class="form-control">No image</label>
		@else
			<img class="form-control" src="{{ asset('img/flags/'.$country->flag_name) }}">
		@endif
	@endif
	{{ Form::file('flag', ['class' => 'form-control']) }}
</div>

<!-- country image -->
<div class="form-group{{ $errors->first('image', ' has-error') }}">
	{{ $errors->first('image', '<label class="control-label" for="image">:message</label>') }}
	<label class="control-label" for="image">Image</label>
	@if (isset($country))
		@if ($country->image_name == '')
			<label class="form-control">No image</label>
		@else
			<img class="form-control" src="{{ asset('img/countries/'.$country->image_name) }}">
		@endif
	@endif
	{{ Form::file('image', ['class' => 'form-control']) }}
</div>

{{ Form::submit(isset($country) ? 'Edit' : 'Add', ['class' => 'btn btn-primary']) }}

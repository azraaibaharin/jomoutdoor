<!-- location name -->
<div class="form-group{{ $errors->first('name', ' has-error') }}">
	<label class="control-label" for="name">Name</label>
	{{ $errors->first('name', '<label class="control-label" for="name">(:message)</label>') }}
	{{ Form::text('name', isset($location) ? $location->name : '', ['placeholder' => 'Location name', 'class' => 'form-control']) }}
</div>

<!-- location overview -->
<div class="form-group{{ $errors->first('overview', ' has-error') }}">
	<label class="control-label" for="overview">Overview</label>
	{{ $errors->first('overview', '<label class="control-label" for="overview">(:message)</label>') }}
	{{ Form::textarea('overview', isset($location) ? $location->overview : '', ['placeholder' => 'Describe the overview of this location. E.g: It has wonderful scenery.', 'class' => 'form-control']) }}
</div>

<!-- location image -->
<div class="form-group{{ $errors->first('image', ' has-error') }}">
	<label class="control-label" for="image">Image (for optimum page load speed, size < 1MB)</label>
	{{ $errors->first('image', '<label class="control-label" for="image">(:message)</label>') }}
	@if (isset($location))
		@if ($location->image_name == '')
			<label class="form-control">No image</label>
		@else
			<img class="form-control" src="{{ asset('img/locations/'.$location->image_name) }}">
		@endif
	@endif
	{{ Form::file('image', ['class' => 'form-control']) }}
</div>

{{ Form::hidden('activityId', $activity->id) }}	
{{ Form::submit(isset($location) ? 'Edit' : 'Add', ['class' => 'btn btn-primary']) }}
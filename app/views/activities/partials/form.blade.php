<!-- activity name -->
<div class="form-group{{ $errors->first('name', ' has-error') }}">
	<label class="control-label" for="name">Name</label>
	{{ $errors->first('name', '<label class="control-label" for="name">(:message)</label>') }}
	{{ Form::text('name', isset($activity) ? $activity->name : '', ['placeholder' => 'Activity name', 'class' => 'form-control']) }}
</div>
@if (isset($country))
	<!-- country id which the activity belongs to -->
	{{ Form::hidden('countryId', $country->id) }}	
@endif
{{ Form::submit(isset($activity) ? 'Edit' : 'Add', ['class' => 'btn btn-primary']) }}
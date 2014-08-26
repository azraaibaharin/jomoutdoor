<div class="form-group{{ $errors->first('name', ' has-error') }}">
	{{ $errors->first('name', '<label class="control-label" for="name">:message</label>') }}
	{{ Form::text('name', isset($place) ? $place->name : '', ['placeholder' => 'Name of the place', 'class' => 'form-control']) }}
</div>
<div class="form-group{{ $errors->first('description', ' has-error') }}">
	{{ $errors->first('description', '<label class="control-label" for="description">:message</label>') }}
	{{ Form::textarea('description', isset($place) ? $place->description : '', ['placeholder' => 'Say something about the place', 'class' => 'form-control', 'rows' => 3]) }}
</div>
@if (!isset($buttonText))
	{{ Form::hidden('countryId', $country->id) }}	
@endif
{{ Form::submit(isset($buttonText) ? $buttonText : 'Add place', ['class' => 'btn btn-primary']) }}
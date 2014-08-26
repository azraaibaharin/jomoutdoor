<div class="form-group{{ $errors->first('name', ' has-error') }}">
	{{ $errors->first('name', '<label class="control-label" for="name">:message</label>') }}
	{{ Form::text('name', isset($country) ? $country->name : '', ['placeholder' => 'Name of the country', 'class' => 'form-control']) }}
</div>
<div class="form-group{{ $errors->first('description', ' has-error') }}">
	{{ $errors->first('description', '<label class="control-label" for="description">:message</label>') }}
	{{ Form::textarea('description', isset($country) ? $country->description : '', ['placeholder' => 'Say something about the country', 'class' => 'form-control', 'rows' => 3]) }}
</div>
@if(!isset($buttonText))
	<div class="form-group{{ $errors->first('flag', ' has-error') }}">
		{{ $errors->first('flag', '<label class="control-label" for="flag">:message</label>') }}
		{{ Form::file('flag') }}
	</div>
@endif
{{ Form::submit(isset($buttonText) ? $buttonText : 'Add country', ['class' => 'btn btn-primary']) }}

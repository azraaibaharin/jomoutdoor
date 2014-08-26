<div class="form-group{{ $errors->first('name', ' has-error') }}">
	{{ $errors->first('name', '<label class="control-label" for="name">:message</label>') }}
	{{ Form::text('name', isset($package) ? $package->name : '', ['placeholder' => 'Name of the package', 'class' => 'form-control']) }}
</div>
<div class="form-group{{ $errors->first('description', ' has-error') }}">
	{{ $errors->first('description', '<label class="control-label" for="description">:message</label>') }}
	{{ Form::textarea('description', isset($package) ? $package->description : '', ['placeholder' => 'Say something about the package', 'class' => 'form-control', 'rows' => 3]) }}
</div>
<div class="form-group{{ $errors->first('tentative', ' has-error') }}">
	{{ $errors->first('tentative', '<label class="control-label" for="tentative">:message</label>') }}
	{{ Form::textarea('tentative', isset($package) ? $package->tentative : '', ['placeholder' => 'What is the tentative of this package?', 'class' => 'form-control', 'rows' => 5]) }}
</div>
@if (!isset($buttonText))
	{{ Form::hidden('placeId', $place->id) }}	
@endif
{{ Form::submit(isset($buttonText) ? $buttonText : 'Add package', ['class' => 'btn btn-primary']) }}
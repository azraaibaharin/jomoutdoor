
<div class="form-group{{ $errors->first('name', ' has-error') }}">
	{{ $errors->first('name', '<label class="control-label" for="name">:message</label>') }}
	<input name="name" type="text" class="form-control" id="name" placeholder="{{ if($country) $country->name }}">
</div>
<div class="form-group{{ $errors->first('description', ' has-error') }}">
	{{ $errors->first('description', '<label class="control-label" for="description">:message</label>') }}
	<textarea name="description" class="form-control" placeholder="Say something about the country" rows="5"></textarea>
</div>
<div class="form-group{{ $errors->first('flag', ' has-error') }}">
	{{ $errors->first('flag', '<label class="control-label" for="flag">:message</label>') }}
	{{ Form::file('flag') }}
</div>
{{ Form::submit($form_type, ['class' => 'btn btn-primary']) }}
{{ link_to_route('admin', 'Cancel', [], ['class' => 'btn btn-link']) }}
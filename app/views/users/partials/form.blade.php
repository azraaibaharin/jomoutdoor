<div class="form-group{{ $errors->first('username', ' has-error') }}">
	{{ $errors->first('username', '<label class="control-label" for="username">:message</label>') }}
	{{ Form::text('username', isset($user) ? $user->username : '', ['placeholder' => 'Username', 'class' => 'form-control']) }}
</div>
<div class="form-group{{ $errors->first('email', ' has-error') }}">
	{{ $errors->first('email', '<label class="control-label" for="email">:message</label>') }}
	{{ Form::email('email', isset($user) ? $user->email : '', ['placeholder' => 'Email', 'class' => 'form-control']) }}
</div>
<div class="form-group{{ $errors->first('password', ' has-error') }}">
	{{ $errors->first('password', '<label class="control-label" for="password">:message</label>') }}
	<input type="password" value="" name="password" class="form-control" placeholder="Password">
</div>
<div class="form-group{{ $errors->first('permission', ' has-error') }}">
	{{ $errors->first('permission', '<label class="control-label" for="permission">:message</label>') }}
	{{ Form::select('permission', array('0' => 'Administrator', '1' => 'Member')); }}
</div>

{{ Form::submit(isset($user) ? 'Edit' : 'Add', ['class' => 'btn btn-primary']) }}

@extends('layouts.base')

@section('content')
<div id="login">
	<div class="fullscreen-bg" style="background-image: url('{{ asset('img/login-scaled.jpg') }}')"></div>

	@include('layouts.partials.nav', ['hideSubMenus' => true])

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-sm-offset-4">
				<div id="login-box" class="panel panel-default">
					<div class="panel-body">
						{{ Form::open(['route' => 'session.store', 'role' => 'form']) }}
							<div class="form-group{{ $errors->first('email', ' has-error') }}">
								{{ $errors->first('email', '<label class="control-label" for="email">:message</label>') }}
								{{ Form::text('email', isset($user) ? $user->email : '', ['placeholder' => 'Email', 'class' => 'form-control']) }}
							</div>
							<div class="form-group{{ $errors->first('password', ' has-error') }}">
								{{ $errors->first('password', '<label class="control-label" for="password">:message</label>') }}
								<input type="password" value="" name="password" class="form-control" placeholder="Password">
							</div>
							<div class="btn-group btn-group-justified">
								<div class="btn-group">
									{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
								</div>
								<div class="btn-group">
									<a href="" class="btn btn-default">Register</a>
								</div>
							</div>	
						{{ Form::close() }}
					</div>
				</div>
	        </div>
		</div>
	</div>
</div>
@stop

@section('scripts')
@stop
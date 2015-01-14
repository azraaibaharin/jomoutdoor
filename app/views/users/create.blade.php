@extends('layouts.baseadmin')

@section('content-admin')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">Add a user</h3></div>
					<div class="panel-body">
						{{ Form::open(['route' => 'user.store', 'role' => 'form']) }}
						@include('users.partials.form', ['errors' => $errors])	
						{{ link_to_route('admin', 'Cancel', [], ['class' => 'btn btn-link']) }}
						{{ Form::close() }}
					</div>
				</div>
	        </div>
		</div>
	</div>
@stop
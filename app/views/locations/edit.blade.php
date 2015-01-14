@extends('layouts.baseadmin')

@section('content-admin')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">Edit <b>{{ $location->name }}</b> for {{ $location->activity->name }} activity in {{ $location->activity->country->name }}</h3></div>
					<div class="panel-body">
						{{ Form::model($location, ['method' => 'put', 'route' => ['location.update', $location->id], 'files' => true, 'role' => 'form']) }}
						@include('locations.partials.form', ['type' => 'update', 'errors' => $errors])	
						{{ link_to_route('country.show', 'Cancel', ['countryName' => $activity->country->name], ['class' => 'btn btn-link']) }}
						{{ Form::close() }}
					</div>
				</div>
	        </div>
		</div>
	</div>
@stop
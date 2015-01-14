@extends('layouts.baseadmin')

@section('content-admin')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h1 class="panel-title">Edit <b>{{ $package->name }}</b> of {{ $package->location->name }} {{ $package->location->activity->name }} activity in {{ $package->location->activity->country->name }}</h1></div>
					<div class="panel-body">
						@include('packages.partials.form', ['errors' => $errors, 'type' => 'update', ])	
						{{ link_to_route('country.show', 'Cancel', [$package->location->activity->country->name], ['class' => 'btn btn-link']) }}
					</div>
				</div>
	        </div>
		</div>
	</div>
@stop
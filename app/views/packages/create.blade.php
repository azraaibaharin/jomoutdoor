@extends('layouts.baseadmin')

@section('content-admin')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">Add a package for {{ $location->name }}'s {{ $location->activity->name }} activity in {{ $location->activity->country->name }}</h3></div>
					<div class="panel-body">
						@include('packages.partials.form', ['errors' => $errors, 'type' => 'store'])	
						{{ link_to_route('country.show', 'Cancel', [$location->activity->country->name], ['class' => 'btn btn-link']) }}
					</div>
				</div>
	        </div>
		</div>
	</div>
@stop
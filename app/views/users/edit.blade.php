@extends('layouts.baseadmin')

@section('content-admin')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">Edit <i>{{ $country->name }}</i></h3></div>
					<div class="panel-body">
						{{ Form::model($country, ['method' => 'put', 'route' => ['countries.update', $country->id]]) }}
						@include('countries.partials.form', ['errors' => $errors, 'editMode' => true])	
						{{ link_to_route('countries.show', 'Cancel', ['countryName' => $country->name], ['class' => 'btn btn-link']) }}
						{{ Form::close() }}
					</div>
				</div> 
	        </div>
		</div>
	</div>
@stop
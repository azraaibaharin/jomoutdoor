@extends('layouts.baseadmin')

@section('content-admin')
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title">Edit <b>{{ $country->name }}</b> country</h3></div>
					<div class="panel-body">
						{{ Form::model($country, ['method' => 'put', 'route' => ['country.update', $country->id], 'files' => true]) }}
						@include('countries.partials.form', ['errors' => $errors, 'indexSelection' => $indexSelection])	
						{{ link_to_route('country.show', 'Cancel', ['countryName' => $country->name], ['class' => 'btn btn-link']) }}
						{{ Form::close() }}
					</div>
				</div> 
	        </div>
		</div>
	</div>
@stop
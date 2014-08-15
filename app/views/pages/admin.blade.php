@extends('layouts.base')

@section('stylesheets')
	{{ HTML::style('css/main.css'); }}
@stop

@section('content')
	@include('layouts.partials.nav')

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">
					    <h3 class="panel-title">All countries</h3>
					</div>
					<div class="panel-body">
						<div class="list-group">
						@foreach ($countries as $country)
			          		{{ link_to_route("countries.show", $country->name, ['name' => $country->name], ['class' => 'list-group-item']) }}
						@endforeach
						</div>
						{{ link_to_route("countries.create", "Add a country", [], ['class' => 'btn btn-default']) }}		
					</div>
				</div>
				
	        </div>
		</div>
	</div>

	@include('layouts.partials.footer')	
@stop

@section('scripts')
@stop
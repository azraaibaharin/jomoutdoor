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
					<div class="panel-heading"><h3 class="panel-title">Edit a country</h3></div>
					<div class="panel-body">
						{{ Form::open(['url' => 'countries/'.$country->id, 'method' => 'put', 'files' => true]) }}
						@include('countries.partials.form', ['form_type' => 'Edit', 'errors' => $errors])	
					</div>
				</div>
				<h1>Edit a country</h1>
				<p>{{ Form::text('name', $country->name) }}</p>
				<p>{{ Form::textarea('description', $country->description) }}</p>
				<p>{{ Form::file('flag') }}</p>
				<p>{{ Form::submit('Save') }}{{ link_to_route('countries.show', 'Cancel', ['name' => $country->name]) }}</p>
				{{ Form::close() }}
	        </div>
		</div>
	</div>

	@include('layouts.partials.footer')	
@stop

@section('scripts')
@stop
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
					<div class="panel-heading"><h3 class="panel-title">Add a package in <i>{{ $place->name }}</i></h3></div>
					<div class="panel-body">
						{{ Form::open(['route' => 'packages.store', 'role' => 'form']) }}
						@include('packages.partials.form', ['errors' => $errors])	
						{{ link_to_route('countries.show', 'Cancel', [$place->country->name], ['class' => 'btn btn-link']) }}
						{{ Form::close() }}
					</div>
				</div>
	        </div>
		</div>
	</div>

	@include('layouts.partials.footer')	
@stop

@section('scripts')
@stop
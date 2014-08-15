@extends('layouts.base')

@section('stylesheets')
	{{ HTML::style('css/main.css'); }}
@stop

@section('content')
	@include('layouts.partials.nav')

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Add a Place in <b>{{ $countryName }}</b></h1>
				{{ Form::open(['route' => 'admin.places.store']) }}
				<p>{{ Form::text('name', '', ['placeholder' => 'Name of the place']) }}</p>
				<p>{{ Form::textarea('description', '', ['placeholder' => 'Say something about the place']) }}</p>
				{{ Form::hidden('countryId', $countryId) }}
				<p>
				{{ Form::submit('Add') }}
				{{ link_to('admin/countries/'.$countryName, 'Cancel') }}
				</p>
				{{ Form::close() }}
	        </div>
		</div>
	</div>

	@include('layouts.partials.footer')	
@stop

@section('scripts')
@stop
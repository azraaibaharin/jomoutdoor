@extends('layouts.base')

@section('stylesheets')
	{{ HTML::style('css/main.css'); }}
@stop

@section('content')
	@include('layouts.partials.nav')

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Create a country</h1>
				{{ Form::open(['route' => 'admin.countries.store']) }}
				{{ Form::text('name', 'Name') }}
				{{ Form::text('flag_image_name', 'Flage Image Name') }}
				{{ Form::submit('Create country') }}
				{{ Form::close() }}
				{{ link_to_route('admin.index', 'Back to Admin') }}
	        </div>
		</div>
	</div>

	@include('layouts.partials.footer')	
@stop

@section('scripts')
@stop
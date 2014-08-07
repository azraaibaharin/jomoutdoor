@extends('layouts.base')

@section('stylesheets')
	{{ HTML::style('css/main.css'); }}
@stop

@section('content')
	@include('layouts.partials.nav')

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>{{ $country->name }}</h1>
				{{ link_to_route('admin.countries.edit', 'Edit') }}
				<!-- {{ link_to_route('admin.countries.destroy', 'Delete') }} -->
				{{ link_to_route('admin.index', 'Back to Admin') }}
	        </div>
		</div>
	</div>

	@include('layouts.partials.footer')	
@stop

@section('scripts')
@stop
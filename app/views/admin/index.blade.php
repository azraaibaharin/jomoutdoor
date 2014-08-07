@extends('layouts.base')

@section('stylesheets')
	{{ HTML::style('css/main.css'); }}
@stop

@section('content')
	@include('layouts.partials.nav')

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul>
				@foreach ($countries as $country)
		          	<li>{{ link_to("admin/countries/{$country->name}", $country->name) }}</li>
				@endforeach
				</ul>
				{{ link_to("admin/countries/create", "Add a country") }}
	        </div>
		</div>
	</div>

	@include('layouts.partials.footer')	
@stop

@section('scripts')
@stop
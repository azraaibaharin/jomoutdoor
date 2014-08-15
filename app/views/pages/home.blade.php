@extends('layouts.base')

@section('stylesheets')
	{{ HTML::style('css/slick.css'); }}
	{{ HTML::style('css/main.css'); }}
@stop

@section('content')
	@include('layouts.partials.nav')
	
	@include('layouts.partials.slides')

	<div class="countries-wrapper">
		<div class="countries container">
			<div class="row">
			@foreach ($countries as $country)
				<div class="col-xs-6 col-sm-3">
		          	<a href="{{ route('countries.show', ['country_name' => $country->name]) }}">
		          		<img alt="{{ $country->name }} flag" src="{{ asset('img/'.$country->flag_name) }}">
		          		<img alt="{{ $country->name }} flag" src="{{ asset('img/'.$country->flag_name) }}" class="grayscale">
		          	</a>
		        </div>
			@endforeach
			</div>
		</div>
		@include('layouts.partials.footer')
	</div>
@stop

@section('scripts')
	{{ HTML::script('js/vendor/slick.min.js'); }}
@stop
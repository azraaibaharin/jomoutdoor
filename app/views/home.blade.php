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
		          	<a href="{{ url('countries/'.$country->name) }}">
		          		<img alt="{{ $country->name }} flag" src="img/{{ $country->flag_image_name }}.png">
		          		<img alt="{{ $country->name }} flag" src="img/{{ $country->flag_image_name }}_gray.png" class="grayscale">
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
@extends('layouts.base')

@section('stylesheets')
{{ HTML::style('css/vendor/owl.carousel.css'); }}
{{ HTML::style('css/vendor/animate.css'); }}
@stop

@section('content')
<div id="home">
	@include('layouts.partials.nav')

	<div class="owl-carousel">
		<div class="item">
			<div class="full-page-image" style="background-image: url('{{ asset('img/home-1-scaled.jpg') }}')">
				<h1 class="pull-left">Adventure for everyone</h1>
			</div>
		</div>
		<div class="item">
			<div class="full-page-image" style="background-image: url('{{ asset('img/home-2-scaled.jpg') }}')">
				<h1 class="pull-right">Adventure for everyone</h1>
			</div>
		</div>
		<div class="item">
			<div class="full-page-image" style="background-image: url('{{ asset('img/home-3-scaled.jpg') }}')">
				<h1 class="pull-right">Adventure for everyone</h1>
			</div>
		</div>
		<div class="item">
			<div class="full-page-image" style="background-image: url('{{ asset('img/home-4-scaled.jpg') }}')">
				<h1 class="pull-right">Adventure for everyone</h1>
			</div>
		</div>
	</div>

	<div class="pull-bottom">
		<div class="white-box text-center">
			<h2>Choose your destination</h2>
		</div>
		<div class="white-box-50 text-center">
			@include('layouts.partials.countries')	
		</div>
		@include('layouts.partials.footer')
	</div>
</div>
@stop

@section('scripts')
{{ HTML::script('js/vendor/owl.carousel.min.js'); }}

<script type="text/javascript">
$(document).ready(function(){
	$(".owl-carousel").owlCarousel({
		animateOut: 'fadeOut',
		loop: true,
		autoplay: true,
		autoplayTimeout: 3500,
		autoPlayHoverPause: true,
		items: 1,
		dots: false,
	});
});
</script>
@stop
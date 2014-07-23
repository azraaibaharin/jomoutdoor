@extends('layouts.base')

@section('stylesheets')
	{{ HTML::style('css/slick.css'); }}
	{{ HTML::style('css/app.css'); }}
@stop

@section('content')
	@include('layouts.partials.nav')
	
	<div class="slides">
		<div>
			<section style="background-image: url('img/slide1.jpg')">
				<h1>Adventure for Everyone</h1>
			</section>
		</div>
		<div>
			<section style="background-image: url('img/slide2.jpg')">
				<h1>Adventure for Everyone</h1>
			</section>
		</div>
		<div>
			<section style="background-image: url('img/slide3.jpg')">
				<h1>Adventure for Everyone</h1>
			</section>
		</div>
		<div>
			<section style="background-image: url('img/slide4.jpg')">
				<h1>Adventure for Everyone</h1>
			</section>
		</div>
		<div>
			<section style="background-image: url('img/slide5.jpg')">
				<h1>Adventure for Everyone</h1>
			</section>
		</div>
	</div>	

	<div class="countries-wrapper">
		<div class="countries container">
			<div class="row">
		        <div class="col-xs-6 col-sm-3">
		          	<img alt="Generic placeholder image" src="img/flag_malaysia_rd.png">
		        </div>
		        <div class="col-xs-6 col-sm-3">
		          	<img alt="Generic placeholder image" src="img/flag_indonesia_rd.png">
		        </div>
		        <div class="col-xs-6 col-sm-3">
		          	<img alt="Generic placeholder image" src="img/flag_thailand_rd.png">
		        </div>
		        <div class="col-xs-6 col-sm-3">
		          	<img alt="Generic placeholder image" src="img/flag_nepal_rd.png">
		        </div>
			</div>
		</div>
	</div>
	
	@include('layouts.partials.footer')
@stop

@section('scripts')
	{{ HTML::script('js/vendor/slick.min.js'); }}
@stop
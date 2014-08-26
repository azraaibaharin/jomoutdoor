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
					<div class="panel-heading">
					    <h3 class="panel-title">
					    	<img src="{{ asset('img/'.$country->flag_name) }}" alt="{{ $country->name }}"> {{ $country->name }} <i>{{ $country->description }}</i>
					    </h3>
					</div>
					<div class="panel-body">
					  	<div class="page-banner" style="background: url({{ asset('img/kathmandu.png') }})"></div>
						@if (Session::get('message'))
						<div class="alert alert-success alert-dismissible" role="alert">
						  	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						  	{{ Session::get('message') }}
						</div>
						@endif
						@include('countries.partials.places', ['country' => $country])
					</div>
					<div class="panel-footer">
				    	<a class="btn btn-sm btn-default" title="Edit {{ $country->name }}" href="{{ route('countries.edit', ['id' => $country->name]) }}">Edit</a>
				    	<a class="btn btn-sm btn-danger" title="Delete {{ $country->name }}" href="{{ route('countries.destroy', ['id' => $country->id]) }}">Delete {{ $country->name }}</a>
				    	<a class="btn btn-sm btn-primary" title="Add a place in {{ $country->name }}" href="{{ route('places.create', ['id' => $country->name]) }}">Add place</a>
					</div>
				</div>
	        </div>
		</div>
	</div>

	@include('layouts.partials.footer')	
@stop

@section('scripts')
@stop
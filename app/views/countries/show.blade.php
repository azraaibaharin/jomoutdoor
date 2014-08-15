@extends('layouts.base')

@section('stylesheets')
	{{ HTML::style('css/main.css'); }}
@stop

@section('content')
	@include('layouts.partials.nav')

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			@if (Session::get('message'))
				<div class="alert" role="alert">{{ Session::get('message') }}</div>
			@endif
				<div class="panel panel-default">
					<div class="panel-heading">
					    <h3 class="panel-title">
					    	<img src="{{ asset('img/'.$country->flag_name) }}" alt="{{ $country->name }}">
					    	{{ $country->name }}
					    	<i>{{ $country->description }}</i>
					    </h3>
					</div>
					<div class="panel-body">
						@if (head($country->places))
							@foreach ($country->places as $place)
								{{ $place->name }}<br>
							@endforeach
						@else
							<p>No places exist for this country</p>
						@endif
						{{ Form::open(['url' => $country->id, 'method' => 'delete']) }}
							{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
							{{ link_to_route('countries.edit', 'Edit', ['country_name' => $country->name], ['class' => 'btn btn-default']) }} 
							{{ link_to_route('places.create', 'Add a Place', ['country_name' => $country->name], ['class' => 'btn btn-default']) }}
							{{ link_to_route('admin', 'Back', [], ['class' => 'btn btn-default']) }}	
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
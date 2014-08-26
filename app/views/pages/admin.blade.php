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
					    	All countries
					    </h3>
					</div>
					<div class="panel-body">
						<div class="list-group">
						@foreach ($countries as $country)
							<div class="list-group-item">
								<a href="{{ route('countries.show', ['name' => $country->name]) }}" title="View country"><img src="{{ asset('img/'.$country->flag_name) }}" alt="{{ $country->name }}" height="20"> {{ $country->name }}</a>
							</div>
						@endforeach
						</div>
				    	<a href="{{ route('countries.create') }}" class="btn btn-sm btn-primary"  title="Add a country">Add a country</a>
					</div>
				</div>
				
	        </div>
		</div>
	</div>

	@include('layouts.partials.footer')	
@stop

@section('scripts')
@stop
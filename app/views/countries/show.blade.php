@extends('layouts.base')

@section('content')
	<div id="country">
		@include('layouts.partials.nav')

		<div class="top-page-image" style="background-image: url('{{ asset('img/countries/'.$country->image_name) }}')"></div>

		<div class="white-box">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						@if (Session::get('message'))
						<div class="alert-wrapper">
							<div class="alert alert-success" role="alert">
								{{ Session::get('message') }}
								<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
							</div>
						</div>
						@endif
						
						<div class="row">
							<div class="col-xs-12">
							    <h1 class="hero">{{ $country->name }}</h1>
						    @if (isset($country->overview) && trim($country->overview)!=='')
								<p class="hero">{{ $country->overview }}</p>
							@endif
							</div>
						</div>
						
						@include('countries.partials.activities', ['country' => $country])

						@if (Auth::check() && Auth::user()->permission == 0)
							<!-- Edit, Delete country and add Activity button -->
							<div class="admin-actions">
						    	<a class="btn btn-sm btn-default" title="Edit {{ $country->name }}" href="{{ route('country.edit', ['id' => $country->id]) }}"><i class="glyphicon glyphicon-pencil"></i></a>
						    	<div class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></div>

						    	<!-- Delete country confirmation box -->
							    <div class="btn btn-sm btn-delete-confirm">Are you sure? 
						    		{{ Form::open(['route' => ['country.destroy', $country->id], 'method' => 'delete']) }}
									  	<button type="submit">Yes</button>
									{{ Form::close() }}
								 	<a>No</a>
								 </div>
						    	<a class="btn btn-sm btn-primary" title="Add an activity in {{ $country->name }}" href="{{ route('activity.create', ['id' => $country->id]) }}"><i class="glyphicon glyphicon-plus"></i></a>
							</div>
					    @endif

					    <hr/>
					    
					</div>
				</div>
			</div>
			<!-- end of white-box -->
			@include('layouts.partials.footer')
		</div>
	</div> 
	<!-- end of #country -->

@stop

@section('scripts')
	<script type="text/javascript" src="{{ asset('js/delete.button.js') }}"></script>
@stop
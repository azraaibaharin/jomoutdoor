@extends('layouts.base')

@section('content')
	<div id="about">
		@include('layouts.partials.nav')
	
		<div class="page-banner" style="background-image: url('img/about.jpg')"></div>

		<div class="white-box">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
					    <h1 class="hero">{{{ $page->name }}}</h1>
						<p>{{{ $page->content }}}</p>

						@if (Auth::check() && Auth::user()->permission == 0)
							<!-- Edit, Delete country and add Activity button -->
							<div class="admin-actions">
						    	<a class="btn btn-sm btn-default" title="Edit {{ $page->name }}" href="{{ route('page.edit', ['id' => $page->id]) }}"><i class="glyphicon glyphicon-pencil"></i></a>
						    	<div class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></div>

						    	<!-- Delete country confirmation box -->
							    <div class="btn btn-sm btn-delete-confirm">Are you sure? 
						    		{{ Form::open(['route' => ['page.destroy', $page->id], 'method' => 'delete']) }}
									  	<button type="submit">Yes</button>
									{{ Form::close() }}
								 	<a>No</a>
								</div>
							</div>
					    @endif
					</div>
				</div>
			</div>
		</div>
		@include('layouts.partials.footer')
	</div>
@stop

@section('scripts')
	<script type="text/javascript" src="{{ asset('js/delete.button.js') }}"></script>
@stop
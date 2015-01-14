@extends('layouts.base')

@section('stylesheets')
	{{ HTML::style('css/main.css'); }}
@stop

@section('content')
	@include('layouts.partials.nav')

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
					    <h3 class="panel-title">
					    	{{ $user->username }} 
					    </h3>
					</div>
					<div class="panel-body">
						@if (Session::get('message'))
							@include('layouts.partials.message-error', ['message' => Session::get('message')])
						@endif
						<ul class="list-group">
						  	<li class="list-group-item">{{ $user->email }}</li>
						  	<li class="list-group-item">{{ $user->permission }}</li>
						</ul>
					</div>
					<div class="panel-footer">
				    	<a class="btn btn-sm btn-default" title="Edit {{ $user->username }}" href="{{ route('user.edit', ['id' => $user->id]) }}">Edit</a>
				    	<a class="btn btn-sm btn-danger" title="Delete {{ $user->username }}" href="{{ route('user.destroy', ['id' => $user->id]) }}">Delete {{ $user->username }}</a>
					</div>
				</div>
	        </div>
		</div>
	</div>

	@include('layouts.partials.footer')	
@stop

@section('scripts')
@stop
@extends('layouts.base')

@section('content')
	<div id="admin">
		@include('layouts.partials.nav')

		@yield('content-admin')
	</div>
	
	@include('layouts.partials.footer')
@stop
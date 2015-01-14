@extends('layouts.baseadmin')

@section('content-admin')
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				@if (Session::get('message') != '')
				<div class="alert-wrapper">
					<div class="alert alert-success" role="alert">
						{{ Session::get('message') }}
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					</div>
				</div>
				@endif
				@if (Session::get('error') != '')
				<div class="alert-wrapper">
					<div class="alert alert-danger" role="alert">
						{{ Session::get('error') }}
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					</div>
				</div>
				@endif
				<div class="panel panel-default">
					<div class="panel-heading">
					    <h3 class="panel-title">
					    	All countries
					    </h3>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Name</th>
										<th>Activities</th>										
										<th>Locations</th>
										<th>Packages</th>
									</tr>
								</thead>
								<tbody>
								@foreach ($countries as $country)
									<?php 
										$locationsCount = 0; 
										$packagesCount = 0; 
										foreach($country->activities as $activity) 
										{
											$locationsArr = $activity->locations;
											if (!is_null($locationsArr))
											{
												$locationsCount = $locationsCount + $locationsArr->count();
												foreach ($locationsArr as $location) 
												{
													$packagesArr = $location->packages;
													if (!is_null($packagesArr))
													{
														$packagesCount = $packagesCount + $packagesArr->count();
													}	
												}
											}
										}
									?>
									<tr>
										<td>
											<a href="{{ route('country.show', ['name' => $country->name]) }}" title="View country"><img src="{{ asset('img/flags/'.$country->flag_name) }}" alt="{{ $country->name }}" height="20"> {{ $country->name }}
											</a>
										</td>
										<td>
											<span class="label label-default">{{ $country->activities->count() }}</span>
										</td>
										<td>
											<span class="label label-default">{{ $locationsCount }}</span>
										</td>
										<td>
											<span class="label label-default">{{ $packagesCount }}</span>
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
				    	<a href="{{ route('country.create') }}" class="btn btn-sm btn-primary"  title="Add a country">Add a country</a>
					</div>
				</div>
				
	        </div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">
					    <h3 class="panel-title">
					    	All users
					    </h3>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Username</th>
										<th>Email</th>
										<th>Permission</th>
									</tr>
								</thead>
								<tbody>
								@foreach ($users as $user)
									<tr>
										<td>
											<a href="{{ route('user.show', ['username' => $user->username]) }}" title="View user">{{ $user->username }}</a>
										</td>
										<td>{{ $user->email }}</td>
										<td>
										@if($user->permission == 0)
											<span class="label label-default">Administrator</span>
										@else 
											<span class="label label-default">Member</span>
										@endif
										</td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
						<a href="{{ route('user.create') }}" class="btn btn-sm btn-primary"  title="Add a user">Add a user</a>
					</div>
				</div>
				
	        </div>
		</div>
	</div>
@stop

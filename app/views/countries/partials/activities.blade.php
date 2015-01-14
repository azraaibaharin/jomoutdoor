<?php $activities = $country->activities; ?>
@if (!is_null($activities) && head($activities))
	<div id="activities" class="row">
		<div class="col-xs-12 col-md-12">
		@foreach ($activities as $activity)
			<div class="activity-box">
				<h4 id="activity-{{ $activity->id }}"class="hero">{{ $activity->name }}</h4>

				@include('countries.partials.locations', ['activity' => $activity])

				@if (Auth::check() && Auth::user()->permission == 0)
					<!-- admin actions for Activity -->
					<div class="admin-actions">
						<a href="{{ route('activity.edit', [$activity->id]) }}" class="btn btn-sm btn-default" title="Edit {{ $activity->name }}"><i class="glyphicon glyphicon-pencil"></i></a>
						<div class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></div>

						<!-- Delete activity confirmation box -->
					    <div class="btn btn-sm btn-delete-confirm">Are you sure? 
				    		{{ Form::open(['route' => ['activity.destroy', $activity->id], 'method' => 'delete']) }}
							  	<button type="submit">Yes</button>
							{{ Form::close() }}
						 	<a>No</a>
						 </div>
						<a href="{{ route('location.create', [$activity->id]) }}" class="btn btn-sm btn-primary" title="Add a location in {{ $activity->name }} activity"><i class="glyphicon glyphicon-plus"></i></a>
					</div>
				@endif
				<hr/>
			</div>
		@endforeach
		<!-- End activities loop -->
		</div>
	</div>
@else
	<div class="row">
		<div class="col-xs-12">
			<p class="bg-info">No activity available for {{ $country->name}}</p>
		</div>
	</div>
@endif
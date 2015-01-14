<?php $locations = $activity->locations; ?>
@if (!is_null($locations) && head($locations))
<div class="row">	
	@foreach ($locations as $location)
		<div class="col-xs-12 col-md-3">
			<div class="location">
				<div class="image" style="background-image: url('{{ asset('img/locations/'.$location->image_name) }}')"></div>
				<div class="details">
					<h5>{{ $location->name }}</h5>
			  		<p>{{ $location->overview }}</p>
			  		<a data-toggle="modal" href="#location-{{ $location->id }}-details">View details</a>
				</div>
			</div>
		</div>

		<div class="location-details-modal modal fade" id="location-{{ $location->id }}-details" tabindex="-1" role="dialog" aria-hidden="true">
		  	<div class="modal-dialog modal-lg">
		    	<div class="modal-content">
		    		<div class="modal-header">
			        	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        	<h4 class="modal-title">{{ $location->name }}</h4>
			      	</div>

				    <div class="modal-body">
					    <p>{{ $location->overview }}</p>
						<?php $packages = $location->packages; ?>
						@if (!is_null($packages) && head($packages))
					  		<ul class="nav nav-pills">
					  		<?php $navIdx = 0; ?>
							@foreach ($packages as $package)
					  			<li <?php if ($navIdx == 0) echo "class='active'"; $navIdx++; ?>><a href="#package-{{ $package->id }}" role="tab" data-toggle="tab">{{ $package->name }}</a></li>
							@endforeach
							</ul>

							<div class="tab-content">
							<?php $paneIdx = 0; ?>
							@foreach ($packages as $package)
							  	<div class="tab-pane <?php if ($paneIdx == 0) echo 'active'; $paneIdx++; ?>" id="package-{{ $package->id }}">
								  	<p>{{ $package->content }}</p>
								  	<!-- <a href="{{ $package->image_url }}">Package photos</a> -->
									</p>
								  	@if (Auth::check() && Auth::user()->permission == 0)
									  	<!-- admin actions for Package -->
									  	<div class="admin-actions">
										  	<a href="{{ route('package.edit', [$package->id]) }}" class="btn btn-sm btn-default" title="Edit {{ $package->name }}"><i class="glyphicon glyphicon-pencil"></i></a>
										  	<div class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></div>
										    <div class="btn btn-sm btn-delete-confirm">Are you sure? 
									    		{{ Form::open(['route' => ['package.destroy', $package->id], 'method' => 'delete']) }}
												  	<button type="submit">Yes</button>
												{{ Form::close() }}
											 	<a>No</a>
											 </div>
										</div>
									@endif
							  	</div>
							@endforeach
							</div>
						@else
							<p class="bg-info">No package available for {{ $location->name }}</p>
						@endif

						@if (Auth::check() && Auth::user()->permission == 0)
							<!-- admin actions for Location -->
							<div class="admin-actions">
						    	<a href="{{ route('location.edit', [$location->id]) }}" class="btn btn-sm btn-default" title="Edit {{ $location->name }}"><i class="glyphicon glyphicon-pencil"></i></a>
						    	<div class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></div>
							    <div class="btn btn-sm btn-delete-confirm">Are you sure? 
						    		{{ Form::open(['route' => ['location.destroy', $location->id], 'method' => 'delete']) }}
									  	<button type="submit">Yes</button>
									{{ Form::close() }}
								 	<a>No</a>
								 </div>
						    	<a href="{{ route('package.create', [$location->id]) }}" class="btn btn-sm btn-primary" title="Add a Package in {{ $location->name }}"><i class="glyphicon glyphicon-plus"></i></a>
							</div>

							<!-- Delete location confirmation modal box -->
							<!-- <div class="modal fade" id="{{ $location->id }}-delete-location-confirm-modal" tabindex="-1" role="dialog" aria-hidden="true">
							  	<div class="modal-dialog">
							    	<div class="modal-content">
									    <div class="modal-body">
									        <p>Are you sure you want to delete <b>{{ $location->name }}</b>?</p>
									        {{ Form::open(['route' => ['location.destroy', $location->id], 'method' => 'delete']) }}
											  	<button type="submit" class="btn btn-sm btn-danger">Delete</button>
											{{ Form::close() }}
									        <button type="button" class="btn btn-sm btn-link" data-dismiss="modal">Cancel</button>
									    </div>
							    	</div>
							  	</div>
							</div> -->
					    @endif
				    </div>
		    	</div>
		  	</div>
		</div>

	@endforeach
	<!-- End locations loop -->
</div>
@else
	<p class="bg-info">No location available for {{ $activity->name }}</p>
@endif
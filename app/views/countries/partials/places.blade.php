<?php $places = $country->places; ?>
@if (head($places))
	<!-- Nav tabs -->
	<?php $tabIdx = 0; $tabClass = 'active'; ?>
	<ul class="nav nav-tabs nav-justified" role="tablist">
		@foreach ($places as $place)
		<li class="{{ $tabClass }}"><a href="#place{{ $place->id }}" role="tab" data-toggle="tab">{{ $place->name }}</a></li>
		<?php $tabIdx++; if ($tabIdx > 0) $tabClass = ''; ?>
		@endforeach
	</ul>

	<!-- Tab panes -->
	<?php $contentIdx = 0; $contentClass = 'in active'; ?>
	<div class="tab-content">
	@foreach ($places as $place)
		<?php $packages = $place->packages; ?>
		<div class="tab-pane fade {{ $contentClass }}" id="place{{ $place->id }}">
		@if (head($packages))
			@foreach ($packages as $package)
			<div class="panel panel-default">
			    <div class="panel-heading">
		        	<a class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#package{{ $package->id }}">
		          		{{ $package->name }} <i>{{ $package->description }}</i>
		        	</a>
			    </div>
			    <div id="package{{ $package->id }}" class="panel-collapse collapse">
			      	<div class="panel-body">
			      		<p>{{ $package->tentative }}</p>
			        	<a href="{{ route('packages.edit', [$package->id]) }}" class="btn btn-sm btn-default" title="Edit {{ $package->name }}">Edit</a> 
			      		<a href="" class="btn btn-sm btn-danger" title="Delete {{ $package->name }}">Delete {{ $package->name }}</a>
			      		<a href="" class="btn btn-sm btn-primary" title="Delete {{ $package->name }}">Join</a>
			      	</div>
			    </div>
			</div>
			@endforeach
		@else
			<p class="bg-info">{{ $place->name }} has no available packages.</p>
		@endif
			<a href="{{ route('places.edit', [$place->id]) }}" class="btn btn-sm btn-default" title="Edit {{ $place->name }}">Edit</a>
			<a href="" class="btn btn-sm btn-danger" title="Delete {{ $place->name }}">Delete {{ $place->name }}</a>
			<a href="{{ route('packages.create', [$place->id]) }}" class="btn btn-sm btn-primary" title="Add a package in {{ $place->name }}">Add package</a>
		</div>
		<?php $contentIdx++; if ($contentIdx > 0) $contentClass = ''; ?>
	@endforeach
	</div>
@else
	<p class="bg-info">{{ $country->name}} has no available places.</p>
@endif
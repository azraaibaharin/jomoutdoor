@foreach ($packages as $package)
  	<p>{{ $package->content }}</p>
  	<p><a href="{{ $package->image_url }}" target="_blank">{{ $package->image_url }}</a></p>

  	<!-- admin actions for Package -->
  	@if (Auth::check() && Auth::user()->permission == 0)
	  	<div class="admin-actions">
		  	<a href="{{ route('package.edit', [$package->id]) }}" class="btn btn-sm btn-default" title="Edit {{ $package->name }}"><i class="glyphicon glyphicon-pencil"></i></a>
			<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#{{ $package->id }}-delete-package-confirm-modal"><i class="glyphicon glyphicon-trash"></i></button>
		</div>
	@endif

  	<!-- Delete package confirmation modal box -->
	@if (Auth::check() && Auth::user()->permission == 0)
		<div class="modal fade" id="{{ $package->id }}-delete-package-confirm-modal" tabindex="-1" role="dialog" aria-hidden="true">
		  	<div class="modal-dialog">
		    	<div class="modal-content">
				    <div class="modal-body">
				        <p>Are you sure you want to delete <b>{{ $package->name }}</b>?</p>
				        {{ Form::open(['route' => ['package.destroy', $package->id], 'method' => 'delete']) }}
						  	<button type="submit" class="btn btn-sm btn-danger">Delete</button>
						{{ Form::close() }}
				        <button type="button" class="btn btn-sm btn-link" data-dismiss="modal">Cancel</button>
				    </div>
		    	</div>
		  	</div>
		</div>
	@endif
@endforeach
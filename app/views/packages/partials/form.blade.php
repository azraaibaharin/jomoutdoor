<!-- package name -->
<div class="form-group" for="name">
	<label class="control-label" for="name">Name</label>
	{{ $errors->first('name', '<label class="control-label" for="name">:message</label>') }}
	{{ Form::text('name', isset($package) ? $package->name : '', ['placeholder' => 'Package name', 'class' => 'form-control']) }}
</div>

<!-- package content -->
<div class="form-group{{ $errors->first('content', ' has-error') }}">
	<label class="control-label">Content / Itinerary</label>
	{{ $errors->first('content', '<label class="control-label" for="content">:message</label>') }}
	<div id="toolbar">
		<span class="ql-format-group">
			<span title="Bold" class="ql-format-button ql-bold">B</span>
			<span title="Italic" class="ql-format-button ql-italic">I</span>
			<span title="Underline" class="ql-format-button ql-underline">U</span>
			<span title="Strikethrough" class="ql-format-button ql-strike">S</span>
		</span>
	</div>
	<div id="content" class="form-control"></div>
</div>


@if (isset($type))
	{{ Form::hidden('_method', $type) }}
	@if (isset($package))
		{{ Form::hidden('countryName', $package->location->activity->country->name) }}
		{{ Form::hidden('locationId', $package->location->id) }}
		{{ Form::hidden('packageId', $package->id) }}	
		{{ Form::hidden('packageContent', $package->content) }}	
	@else
		{{ Form::hidden('countryName', $location->activity->country->name) }}	
		{{ Form::hidden('locationId', $location->id) }}	
	@endif
@endif

<input class="btn btn-primary btn-submit" type="button" value="{{ isset($package) ? 'Edit' : 'Add' }}">

<script type="text/javascript" src="{{ asset('js/vendor/quill.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/packages.form.js') }}"></script>
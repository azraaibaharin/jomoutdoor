<!-- page name -->
<div class="form-group{{ $errors->first('name', ' has-error') }}">
	<label class="control-label" for="name">Name</label>
	{{ $errors->first('name', '<label class="control-label" for="name">(:message)</label>') }}
	{{ Form::text('name', isset($page) ? $page->name : '', ['placeholder' => 'Page name', 'class' => 'form-control']) }}
</div>
<!-- page content -->
<div class="form-group{{ $errors->first('content', ' has-error') }}">
	<label class="control-label" for="content">Content</label>
	{{ $errors->first('content', '<label class="control-label" for="content">(:message)</label>') }}
	{{ Form::textarea('content', isset($page) ? $page->content : '', ['placeholder' => 'Page content', 'class' => 'form-control']) }}
</div>
<div class="form-group{{ $errors->first('status', ' has-error') }}">
	<label class="control-label" for="status">Status</label>
	{{ $errors->first('status', '<label class="control-label" for="status">(:message)</label>') }}
	{{ Form::select('status', array('published' => 'Published', 'draft' => 'Draft'), isset($page) ? $page->status : 'Inactive', ['class' => 'form-control']) }}
</div>
@if (isset($page))
	{{ Form::hidden('page_id', $page->id) }}	
@endif
{{ Form::submit(isset($page) ? 'Edit' : 'Add', ['class' => 'btn btn-primary']) }}
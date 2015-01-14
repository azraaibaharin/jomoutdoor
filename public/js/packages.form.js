// TODO: min this content
$(function() {
	var editor = new Quill('#content');
	editor.addModule('toolbar', {
		container: '#toolbar'
	})

	// set existing content to the editor
	var existingContentVal = $('input[name=packageContent]').val();
	if (typeof(existingContentVal) != 'undefined' && existingContentVal != '')
	{
		if (existingContentVal.indexOf('<div>') > -1)
		{
			editor.setHTML(existingContentVal);
		} else 
		{
			editor.setText(existingContentVal);			
		}
	}

	$('.btn-submit').on('click', function() {
		var	countryName = $('input[name=countryName]').val(),
			locationId = $('input[name=locationId]').val(),
			packageId = $('input[name=packageId]').val(),
			packageName = $('input[name=name]').val(),
			packageContent = editor.getHTML();

		// populate data to be passed to call
		var data = {};
		if (typeof(countryName) != 'undefined') { data.countryName = countryName };
		if (typeof(locationId) != 'undefined') { data.locationId = locationId };
		if (typeof(packageId) != 'undefined') { data.packageId = packageId };
		if (typeof(packageName) != 'undefined') { data.name = packageName };
		if (typeof(packageContent) != 'undefined') { data.content = packageContent };

		var	formURL = '/api/package/store',
		formType = $('input[name=_method]').val();
		if (typeof(formType) != 'undefined') { formURL = '/api/package/' + formType };

		var jqxhr = $.post(formURL, data, function(data) {
			var errors = data.errors;
			if ($.isEmptyObject(errors))
			{
				window.location = '/country/' + data.countryName;				
			} else
			{
				$.each(errors, function(fieldName, fieldObj) {
					var errorFormGroup = $('.form-group[for=' + fieldName + ']'),
						errorLabel = $('.control-label[for=' + fieldName + ']');
					
					if ( ! errorFormGroup.hasClass('has-error'))
					{
						errorLabel.append(' (' + fieldObj[0] + ')');							
						errorFormGroup.addClass('has-error');
					}
					console.log(fieldName + ' field has error : ' + fieldObj[0]);
				})
			}
		}, 'json');

		jqxhr.done(function(data) {
			console.log(formURL + ', status : ' + data.status);
		})
		jqxhr.fail(function(data) {
			console.log(formURL + ', status : ' + data.status);
		})
	});
})
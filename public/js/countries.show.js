$(function() {
	var DeleteButton = function() {
		this.init = function() {
			$('.btn-danger').on('click', function() {
				$(this).addClass('show');
				var confirmDiv = $(this).next('.btn-delete-confirm');
				if ( ! confirmDiv.hasClass('show')) {
					confirmDiv.addClass('show');
				}
			})

			$('.btn-delete-confirm > a').on('click', function() {
				var confirmDiv = $(this).parent('.btn-delete-confirm');
				if (confirmDiv.hasClass('show')) {
					confirmDiv.removeClass('show');
				}
				var delBtn = confirmDiv.siblings('.btn-danger');
				if (delBtn.hasClass('show')) {
					delBtn.removeClass('show');
				}
			})
		}

		return this;
	};

	var deleteBtn = new DeleteButton();
	deleteBtn.init();
})
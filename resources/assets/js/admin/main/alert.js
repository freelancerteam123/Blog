$(document).ready(function () {
	var message = $('.message-flash .alert');
	if (message) {
		$('.message-flash .alert').css('top', '58px');
	}

	setTimeout(function () {
		message.hide();
	}, 3000);
})
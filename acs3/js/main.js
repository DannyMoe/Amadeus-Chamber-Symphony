$(document).ready(function () {
	$('#submitButton').click(function(e) {
		e.preventDefault();
		var username = $('#loginText').val();
		var password = $('#password').val();
		var error = true;
		
		$.ajax({
			type: "POST",
			url: "data.json",
			dataType: "json",
			success: function(data) {
				$.each(data, function(key, value) {
					if (username == value.username && password == value.password) {
						error = false;
					}
				});
				
				if (error ==false) {
					document.location="login_success.php"
				}
				else {
					$('#logo').fadeOut('slow');
					$('#logo').fadeIn();
					$('#loginText').val('you');
					$('#password').val('failed');
				}
			}
		});
		
		return false;
	});
});
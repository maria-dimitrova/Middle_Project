/**
 * 
 */

$(function() {
	
	var loginIn = false;
	
	$('#enter').hide();
	$('.logged-in').show();
	
	$('form').on('click', function(e) {
		e.preventDefault();
	});
	
	$(".login-btn").on('click', function() {
	
		var loginname = $('#mail').val();
		var loginpass = $('#pass').val();
		
		$.ajax({
			url: 'assets/pdo-basics/select.php',
			method: 'POST',
			dataType: 'json',
			data: {
				loginphp: loginname,
				passphp: loginpass
				},
			success: function(response) {
				if (response == 'success') {
					window.location.replace('index.php');
					loginIn = true;
				}
			}
		});
		
	});
	
	if (loginIn) {
		$('.wrapper-login').hide();
		$('.logged-in').show();
	}
	
	$("#reg-btn").on('click', function() {
	
		var rName = $('#r-name').val();
		var rSurname = $('#r-surname').val();
		var rMail = $('#r-mail').val();
		var rPass = $('#r-pass').val();
		var rRepass = $('#r-re-pass').val();
		
		$.ajax({
			url: 'assets/pdo-basics/insert.php',
			method: 'POST',
			dataType: 'json',
			data: {
				rNamephp: rName,
				rSurnamephp: rSurname,
				rMailphp: rMail,
				rPassphp: rPass,
				rRepassphp: rRepass,
				},
			success: function(response) {
				if (response == 'success') {
					window.location.replace('index.php');
					$('#enter').show();
				}
			}
		});
		
	});
	

	
});
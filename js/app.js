$(document).ready(function(){
	set_parallax();
});

$(window).on('resize', function(event){
	set_parallax();
});

function set_parallax() {
	var windowWidth = $(window).width();
	if(windowWidth < 640){
		$('.ventajas .parallax img').attr('src','img/parallax/ventajas-resp.jpg');
	} else {
		$('.ventajas .parallax img').attr('src','img/parallax/2.jpg');
	}
}
//Ajax contact form
$(function() {

	// Get the form.
	var form = $('#contact-form');
	// Get the messages div.
	var formMessages = $('#form-output');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
		$("#form-submit").text("Enviando...");

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
			.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('alert alert-danger');
			$(formMessages).addClass('alert alert-success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#name').val('');
			$('#location').val('');
			$('#phone').val('');
			$('#email').val('');
			$('#info').val('');
			$("#form-submit").text("Enviar");
		})
			.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('alert alert-success');
			$(formMessages).addClass('alert alert-danger');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
				$("#form-submit").text("Enviar");
			} else {
				$(formMessages).text('Oops! OcurriÃ³ un error no se pudo enviar la forma.');
				$("#form-submit").text("Enviar");
			}
		});

	});

});
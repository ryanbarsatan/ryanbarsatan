function contactSubmit() {
	event.preventDefault();
	var params = $('form').serialize();
	xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", "../libraries/mail_to_me.php?" + params, true);
	xmlhttp.send();

	$('.ui.small.modal.success').modal('show');

};
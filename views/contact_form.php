<?php
session_start();
?>


<html>
<head>
	<link rel="stylesheet" href="/css/contact_form.css">
	<script src="/js/contact-submit.js"></script>
</head>
<body>
	<div class="ui small modal contact-form">
		<div class="content">
			<div class="title">Contact Me</div>
			<div class="contact-info">Ryan Barsatan<br><i class="ui phone icon contact"></i> 808-754-6839<br><i class="ui mail icon contact"></i> info@ryanbarsatan.com</div>

			<div class="title">Send Me A Message</div>
			<form action="" class="ui form">
				<div class="field">
					<label for="name"><i class="ui user icon contact"></i>Name</label>
					<input name="name" type="text" class="ui input">
				</div>
				<div class="field">
					<label for="phone"><i class="ui phone icon contact"></i>Phone</label>
					<input name="phone" type="text" class="ui input">
				</div>
				<div class="field">
					<label for="email"><i class="ui mail icon contact"></i>Email</label>
					<input name="email" type="text" class="ui input">
				</div>

				<div class="field">
					<label for="message"><i class="ui comments icon contact"></i>How can I help?</label>
					<textarea name="message" id="" cols="30" rows="10"></textarea>
				</div>
				<button class="ui button contact-btn">Submit</button>
			</form>
		</div>
	</div>

	<div class="ui small modal success">
		<div class="title"><i class="ui thumbs outline up icon contact" style="color: white;"></i>Thank You!</div>
		<div class="success-description">Thanks for you message, I will get back to you before the end of the day.</div>

	</div>
</body>

<script>
	$('.ui.form').form({
		inline: true,
		fields: {
			name: {
				identifier: 'name',
				rules: [{
					type: 'empty',
					prompt: 'please enter your name'
				}]
			},
			phone: {
				identifier: 'phone',
				rules: [{
					type: 'empty',
					prompt: 'please enter your phone number'
				}]
			},			
			email: {
				identifier: 'email',
				rules: [{
					type: 'email',
					prompt: 'please enter a valid email address'
				}]
			}
		},
		onSuccess: function(){
			contactSubmit();
		}
	});
</script>
</html>
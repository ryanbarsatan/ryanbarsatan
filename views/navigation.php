<?php
session_start();

?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/navigation.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.js"></script>
	<script src="/js/navigation.js"></script>
</head>
<body>
	<div class="ui thin left sidebar vertical menu">
		<a href="/" class="ui right item">Home</a>
		<a href="/views/our_process.php" class="ui item">Our Process</a>
		<!-- <a href="" class="ui item">Blog</a> -->
		<a href="" class="ui item" onclick="$('.ui.small.modal.contact-form').modal('show')">Contact</a>
	</div>
	<div class="ui fixed borderless menu">

		<div class="ui left aligned borderless menu mobile">
			<div class="ui left floated item">
				<button class="no-style" onclick="$('.ui.sidebar').sidebar('setting', 'transition', 'overlay').sidebar('toggle');"><i class="ui big content icon"></i></button>	
			</div>
		</div>

		<a href="/" class="ui item logo"><img src="/images/ryanbarsatan_logo.png" alt="ryan barsatan logo" class="ui mini image"></a>
		<div class="ui right aligned borderless menu desktop">
			<a href="/" class="ui right item">Home</a>
			<a href="/views/our_process.php" class="ui item">Our Process</a>
			<!-- <a href="" class="ui item">Blog</a> -->
			<button class="ui button nav-btn" onclick="$('.ui.small.modal.contact-form').modal('show')">Contact</button>
		</div>
	</div>
	
</body>
</html>
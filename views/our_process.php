<?php
session_start( );
include ('navigation.php');
?>


<html>
<head>
	<meta charset="UTF-8">
	<title>Our Process | Ryan Barsatan Web Developer</title>
	<meta name="description" content="Ryan is a web developer based in Oahu, Hawaii that can help you create your website. Whether you already have everything planned out, or starting from scratch, Ryan can help create a website that will make your business soar.">
	<link rel="stylesheet" href="/css/our_process.css">
	<link rel="stylesheet" href="/css/aos.css">
	<script src="/js/aos.js"></script>
</head>
<body>
	<div class="ui container buffer">
		<div class="process-title">OUR PROCESS</div>

		<div></div>
		<div class="sub-title" data-aos="fade-down"><i class="ui flag checkered icon contact"></i>Goal Centered Products</div>
		<div class="text-body" data-aos="fade-down">Tell us your goals and we'll work backwards from there to make sure that the product we deliver is always inline with your original mission. Whether that mission is to expand your online presence, reach out to a different type of customer, or to sell more product, we'll create a plan that puts you in a place to succeed.</div>		

		<div class="sub-title" data-aos="fade-down"><i class="ui database icon contact"></i>Mauka To Makai</div>
		<div class="text-body" data-aos="fade-down">Let us take care of everything. Designing, Layout, Coding, Photo and Video, Database Work, SEO, Branding and more we'll worry about the complicated things so you can focus on running your bussiness. We can even take arial photos and video with our registered drone. </div>

		<div class="sub-title" data-aos="fade-down"><i class="ui mobile icon contact"></i>Mobile First</div>
		<div class="text-body" data-aos="fade-down">We know that more than half of all web views come from phones and tablets. Thats why every product we deliver will always be fully optimized to look great on devices of all sizes.</div>		

		<div class="sub-title" data-aos="fade-down"><i class="ui certificate icon contact"></i>Always Accountable</div>
		<div class="text-body" data-aos="fade-down">We take pride in doing quality work, and delivering a high quality product. If at any time our website or web app crashes, breaks, or goes down we'll work around the clock to make sure its back up and running free of charge.</div>
		<br>

		<button class="ui button contact-btn" onclick="$('.ui.small.modal.contact-form').modal('show')">Lets Work Together</button>

	</div>

	<div id="footer">
		<script>
			$("#footer").load("/views/footer.html");
		</script>
	</div>

</body>
<script>
	AOS.init({
		duration: 1000,
	});
</script>
</html>
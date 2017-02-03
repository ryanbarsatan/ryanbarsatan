<?php
session_start();
include ('views/navigation.php');
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hawaii Web Developer | Ryan Barsatan</title>
	<meta name="description" content="Ryan is a web developer based in Oahu, Hawaii that can help you create your website. Whether you already have everything planned out, or starting from scratch, Ryan can help create a website that will make your business soar.">
	<link rel="stylesheet" href="/css/home.css">
	<link rel="stylesheet" href="/css/aos.css">
	<link rel="stylesheet" href="/css/responsiveslides.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
	<script src="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.js"></script>
	<script src="/js/aos.js"></script>
	<script src="/js/imageslider.js"></script>
	<script src="/js/responsiveslides.min.js"></script>
</head>	

<body>
	<div class="pusher">
		<div class="header">
			<div class="header-content" data-aos="fade-down">
				<img class="ui large centered image"  src="/images/ryanbarsatan_logo_words.png" alt="Ryan Barsatan logo">
				<img class="ui medium centered image" src="/images/hawaii-freelance-web-development.png" alt="hawaii freelance web development">
				<button class="ui large button contact-btn" onclick="$('.ui.small.modal.contact-form').modal('show')">Lets Work Together</button>
			</div>
		</div>


		<div class="middle-section">
			<div class="ui container sub-title">Take your business to the next level with a beautifully designed website or web application.</div>
		</div>
		<div class="middle-section-cards">
			<div class="ui container">

				<div class="ui five centered doubling cards" data-aos="flip-up">

					<div class="card">
						<div class="image">
							<img src="/images/build-unique.jpg">
						</div>
						<div class="content">
							Custom websites built from the ground up for a unique experience
						</div>
					</div>		

					<div class="card">
						<div class="image">
							<img src="/images/mobile-responsive.jpg">
						</div>
						<div class="content">
							Mobile friendly, looks great on all devices
						</div>
					</div>		

					<div class="card">
						<div class="image">
							<img src="/images/affordable-timely.jpg">
						</div>
						<div class="content">
							Timely and Affordable
						</div>
					</div>

					<div class="card">
						<div class="image">
							<img src="/images/big-small-projects.jpg">
						</div>
						<div class="content">
							From small websites to complex web apps we've got you covered
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="projects">
			<div class="sub-title">Recent Projects</div>
			<div class="ui container">
				<div class="ui two doubling link cards" data-aos="zoom-in">
					<a class="card" href="http://daspot.net" target="_blank">
						<div class="image">
							<img src="/images/daspot.jpg" alt="">
						</div>
					</a>
					<a class="card" href="http://whatsthescoops.com" target="_blank">
						<div class="image">
							<img src="/images/whatsthescoops.jpg" alt="whatsthescoops">
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="more-info">
			<div class="rslides_container">
				<ul class="rslides">
					<li>
						<div class="slide01">
							<div class="overlay">
								<div class="left-aligned">
									<div class="slider-description">We'll work with you to create a site that best suits your business needs</div>
								</div>
								<div class="right-aligned">
									<div class="ui button info-btn" onclick="window.location.href='/views/our_process.php'">Our Process</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="slide02">
							<div class="overlay">
								<div class="left-aligned">
									<div class="slider-description">We can take beautiful photos to add life and color to your website</div>
								</div>
								<div class="right-aligned">
									<div class="ui button info-btn" onclick="window.location.href='/views/our_process.php'">Our Process</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="slide03">
							<div class="overlay">
								<div class="left-aligned">
									<div class="slider-description">Easily integrate e-commerce to help your business succeed online</div>
								</div>
								<div class="right-aligned">
									<div class="ui button info-btn" onclick="window.location.href='/views/our_process.php'">Our Process</div>
								</div>
							</div>
						</div>
					</li>
				</ul>  
			</div>
		</div>


		<div class="ryan-barsatan-info-block" data-aos="fade-down">
			<div class="ui centered stackable grid">
				<div class="ui four wide column">
					<img src="/images/ryanbarsatan-headshot.jpg" alt="" class="ui circular image">
				</div>
				<div class="ui eight wide column">
					<div class="personal-description">
						Ryan Barsatan was born and raised on Oahu, Hawaii. "My goal is to create web applications that impact as many people as possible. Lets work together to make our goals reality."
					</div>
					<div class="centered">
						<button class="ui button contact-btn" onclick="$('.ui.small.modal.contact-form').modal('show')">Lets Work Together</button>
					</div>
				</div>
			</div>
		</div>


		<div id="footer">
			<script>
				$("#footer").load("/views/footer.html");
			</script>
		</div>
	</div>
</body>
<script>
	AOS.init({
		duration: 1000,
	});
</script>

</html>
<!DOCTYPE HTML>

<html>
	<head>
		<title>offset your carbon footprint</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="carbon offset offsetting petrol fuel diesel" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
			
		</noscript>
	</head>
	<body class="landing">

<?php require_once('./config1.php'); ?>


		<!-- Header -->
			<header id="header" class="alt">
				<h1><strong><a href="offset.php">Offset</a></strong> your Carbon footprint</h1>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Hi, Your car contributes around 3 tonnes of CO2 each year. <br />It costs about £8 to offset 1 tonne of co2.</h2>
				<p>use the button below to donate a quid each time you fill your car up. <br /> and we will bulk buy into carbon projects to offset the damage<br /> Making your car usage carbon neutral, and the environment happier</p>
				<form action="charge.php" method="POST">
  					<script
    					src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    					data-key="pk_test_yv839ToMOs4LXpsnIhu9hQFH"
    					data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    					data-name="offset your carbon footprint"
    					data-description="carbon offset"
    					data-currency="gbp"
    					data-amount="100"
    					data-locale="auto"
    					data-label="Donate £1"
    						>
 				</script>
				</form>
				
				
				
			</section>
			

			<!-- One -->
				<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
									<h2>What does this site do?</h2>
									
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
								<p>We are a non-profit site built to accept micro payments from people like you, who want to reduce their impact on the environment. We then combine all the payments to bulk buy into carbon offset projects here in Great Britain.</p>
								<p>Every year CO2 emissions from internal combustion engines amounts to just over 3 tonnes per person. Typically it costs around £8 for each tonne of CO2 offset, or £24 per car per year. Anyone making a micropayment each month will be emailed with details on the combined investment amount, what that money will achieve. </p>
							</div>
						</div>
					</div>
				</section>

			<!-- Two -->
				<section id="two" class="wrapper style2 special">
					<div class="container">
						<header class="major">
							<h2>Where does the money go?</h2>
							<p>We currently invest in two carbon offsetting projects</p>
						</header>
						<div class="row 150%">
							<div class="6u 12u$(xsmall)">
								<div class="image fit captioned">
									<img src="images/pic02.jpg" alt="" />
									<h3>wind power generation schemes</h3>
								</div>
							</div>
							<div class="6u$ 12u$(xsmall)">
								<div class="image fit captioned">
									<img src="images/pic03.jpg" alt="" />
									<h3> <a href="http://www.forestcarbon.co.uk/">woodland creation for carbon capture</a> </h3>
								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Three -->
				<section id="three" class="wrapper style1">
					<div class="container">
						<header class="major special">
							<h2>Frequently asked questions</h2>
							
						</header>
					
							<h4>Q. Do you make any money from this?</h4>
							<p>A. Nope, none at all. Every penny you send in goes directly to offsetting carbon projects (minus about 20p per transaction our payment processing company takes)</p>
							<br>
							<h4>Q. You're new to this, are my card details safe?</h4>
							<p>A. Great question. Yes. The website uses a company called <a href="http://www.stripe.co.">STRIPE</a> to take the payment, who cleverly don't allow your details anywhere near my site, or my site's server. Clicking the button takes you to their checkout and they securely take the payment.</p>
							<br>		
							<h4>Q. Is this just a way for people to avoid changing their unenvironmentally friendly ways?</h4>
							<p>A. I suppose in some cases that might be the case, however i've found most people offset as part of cutting their footprint, or as an incentive to be greener, especially if the offset projects offer extra benefits such as improving our UK landscape</p>
								<br>
							<h4>Q. Why have you built this site?</h4>	
							<p>A. Two reasons: roughly 50% due to an enthusiasm for reducing the global carbon footprint, and the other 50% because i made a new years resolution to learn to make websites.</p>
								<br>	
							<h4>Q. How much do i have to donate?</h4>		
							<p>A. You don't have to donate anything, but if you'd like to, about £24 per year should cover the average motor, and works out as only £2 per month. Based on my sample of 1 person (me), people fill up every couple of weeks, so donating a Great British Pound each time would effectively make your motoring carbon neutral</p>
								<br>
							<h4>Q. Can i donate more than £1 at a time?</h4>		
							<p>A. Almost certainly, but i haven't cracked that bit of website development yet. If you'd like to, drop me a quick <a href="mailto:tom@tomwillshare.com?Subject=Hello">email</a> expressing your interest and i'll work out how to implement that!</p>
								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style3 special">
					<div class="container">
						<header class="major">
							<h2>Interested in what we're doing?</h2>
							<p>click below if you've any questions, or want to know more</p>
						</header>
						<ul class="actions">
							<li><a href="mailto:tom@tomwillshare.com?Subject=Hello" class="button special big">Get in touch</a></li>
						</ul>
					</div>
				</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"></a></li>
					</ul>
					<ul class="copyright">
						<li>A website by Tom Willshare</li>
						<li>Design pinched from: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images by: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>
}
	</body>
</html>
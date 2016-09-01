<!DOCTYPE HTML>

<?php
  require_once('./config1.php');
  $token  = $_POST['stripeToken'];
  $customer = \Stripe\Customer::create(array(
      'email' => $_POST['stripeEmail'],
      'card'  => $token
  ));
  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 100,
      'currency' => 'gbp'
  ));
  
?>

<html>
	<head>
		<title>Thank You</title>
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

		<!-- Header -->
			<header id="header" class="alt">
				<h1><strong><a href="offset.html">Offset</a></strong> your Carbon footprint</h1>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Thank you! </h2>
				<p>We'll combine all the payments we get this month and bulk buy into projects to offset our collective carbon footprint<br />We'll send out an email detailing how much we've offset this month</p>
				<br />
				
				<h2><a href="offset.html">Click here to go back to the homepage</a></h2>
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

	</body>
</html>


  
<!-- This is the code for adding the layout  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../css/styles.css"/>
		<title><?php echo $title; ?></title>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: Closed</p>
			</aside>
			<img src="../images/logo.png"/>

		</section>
	</header>
	<nav>
		<ul>
			<!-- <li><a href="index.php?page=jaguar">Jaguar</a></li> -->
			<li><a href="index.php?page=home">Home</a></li>
			<li><a href="index.php?page=cars">Showroom</a></li>
			<li><a href="index.php?page=about">About</a></li>
			<li><a href="index.php?page=contact">Contact us</a></li>
		</ul>
	</nav>
	<img src="../images/randombanner.php"/>
		<?php
			echo $content;
		?>
		<footer>
		&copy; Claire's Cars 2018
	</footer>
</body>
</html>

	
<!-- This is the code for layout.php  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
<!DOCTYPE html>
<html>
	<head>
		<!-- <link href="../../css/styles.css"  type="stylesheet"> -->
		<link rel="stylesheet" href="../../css/styles.css"/>
		<title><?php echo $title ;?></title>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: Closed</p>
				<p>Status: Login</p>
			</aside>
			<img src="../../images/logo.png"/>

		</section>
	</header>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="cars">Showroom</a></li>
			<li><a href="about">About Us</a></li>
			<li><a href="contact_result">Contact us</a></li>
			<li><a href="logout">Logout</a></li>

		</ul>
	</nav>
		<img src="../../images/randombanner.php"/>
	<!-- <main class="admin"> -->

	<!-- <section class="left">
		<ul>
			<li><a href="manufacturers">Manufacturers</a></li>
			<li><a href="cars">Cars</a></li>
			<li><a href="archieve">ArchieveCars</a></li>
			<li><a href="signuser">Add admin</a></li>


		</ul>
	</section> -->

	<!-- <section class="right"> -->

		<?php echo $content;?>



		<!-- </section> -->
	<!-- </main> -->


	<footer>
		&copy; Claire's Cars 2018
	</footer>
</body>
</html>

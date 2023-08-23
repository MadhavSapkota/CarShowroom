<!-- This is the code for mercedes_template  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->

<main class="home">

		<ul>
			<li><a href="index.php?page=jaguar">Jaguar</a></li>
			<li><a href="index.php?page=mercedes">Mercedes</a></li>
			<li><a href="index.php?page=aston">Aston Martin</a></li>
			<li><a href="charlieCars.php?page=charlieCars">Charlie's Cars</a></li>

		</ul>

			<section class="right">

		<h1>Mercedes Cars</h1>

	<ul class="cars">

<?php


require '../db/connect.php';
	$cars = $pdo->prepare('SELECT * FROM cars WHERE manufacturerId = 3');
	$manu = $pdo->prepare('SELECT * FROM manufacturers WHERE id = :id');

	$cars->execute();


	foreach ($cars as $car) {
		$manu->execute(['id' => $car['manufacturerId']]);
		$manufacturer = $manu->fetch();
		echo '<li>';

		if (file_exists('../images/cars/' . $car['id'] . '.jpg')) {
			echo '<a href="../images/cars/' . $car['id'] . '.jpg"><img src="../images/cars/' . $car['id'] . '.jpg" /></a>';
		}

		echo '<div class="details">';
		echo '<h2>' . $manufacturer['name'] . ' ' . $car['name'] . '</h2>';
		echo '<h3>£' . $car['price'] . '</h3>';
		echo '<p>' . $car['description'] . '</p>';
		echo '<p>Discount:£' . $car['discount'] . '</p>';
		echo '<h>Milege:' . $car['milege'] . '</h>';
		echo '<br>' . $car['engine_type'] . '</br>';

		echo '</div>';
		echo '</li>';
	}


?>



		</ul>

</section>


	</main>
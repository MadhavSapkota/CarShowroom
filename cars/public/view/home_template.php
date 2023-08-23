<!-- This is the code for home_template.php  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
<main class="home">

	<section class="right">

		

	<ul class="cars">
<?php
	require '../db/connect.php';
	//$news = $pdo->prepare('SELECT * FROM news');
	$stmt = new DatabaseTable($pdo,'news');
	$stmt = $stmt->findAll();

	//$news->execute();

	 echo '<h1>All news</h1>';
	foreach ($stmt as $car) {
			// echo '<li>';
			echo '<div class="details">';
			echo '<h2><b><br></b>'.'</h2>' .'</br>'.'<h2>'. $car['new_name'] .'</h2>'. '</br>'.'<br>'.'</br>';
			echo '<p><b>Desciption: </b>' . $car['news_description'] . '</p>';
			if (file_exists('../images/cars/' . $car['new_id'] . '.jpg')) {
			echo '<a href="../images/cars/' . $car['new_id'] . '.jpg"><img src="../images/cars/' . $car['new_id'] . '.jpg" /></a>';
		}
	echo '</div>';
	echo '<li>';


	}


?>
	</ul>
</section>
</main>
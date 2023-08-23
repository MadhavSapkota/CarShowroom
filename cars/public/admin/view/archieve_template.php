<!-- This is the code for archieve_template  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
<main class="admin">
	<section class="left">
		<ul>
			<li><a href="manufacturers">Manufacturers</a></li>
			<li><a href="cars">Cars</a></li>
			<li><a href="archieve">ArchieveCars</a></li>
			<li><a href="signuser">Add admin</a></li>
			<li><a href="news">Add NewsArticle</a></li>

		</ul>
	</section>
	<section class="right">
		
<?php
require '../model/connect.php';
session_start();
?>
<?php

		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		?>


			<h2>Cars</h2>

			<a class="new" href="addcar">Add new car</a>

			<?php
			echo '<table>';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Model</th>';
			echo '<th style="width: 10%">Price</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '</tr>';

			//$cars = $pdo->query('SELECT * FROM cars');
			$stmt = new DatabaseTable($pdo,'cars');
			$stmt = $stmt->findAll();
			foreach ($stmt as $car) {
				if ($car['status']=='archived') {
					echo '<tr>';
					echo '<td>' . $car['name'] . '</td>';
					echo '<td>£' . $car['price'] . '</td>';
					echo '<td><a style="float: right" href="editcar?id=' . $car['id'] . '">Edit</a></td>';
					if($car['status'] == 'none'){
						echo '<td><a style="float: right" href="archieve?id=' . $car['id'] . '">Archieve</a></td>';
					}
					else {
						echo '<td><a style="float: right" href="archieve?id=' . $car['id'] . '">Unarchieve</a></td>';
					}
					echo '<td><form method="post" action="deletecar">
					<input type="hidden" name="id" value="' . $car['id'] . '" />
					<input type="submit" name="submit" value="Delete" />
					</form></td>';
					echo '</tr>';
				}
			}

			echo '</thead>';
			echo '</table>';

		}

		else {
			?>
			<h2>Log in</h2>

			<form action="admin" method="post">
				<label>Password</label>
				<input type="password" name="password" />

				<input type="submit" name="submit" value="Log In" />
			</form>
		<?php
		}
	?>
</section>
</main>
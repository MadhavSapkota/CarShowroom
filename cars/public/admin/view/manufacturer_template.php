<!-- This is the code for manufacturer_template.php  -->
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


			<h2>Manufacturers</h2>

			<a class="new" href="addmanufacturer">Add new manufacturer</a>

			<?php
			echo '<table>';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Name</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '</tr>';

			//$categories = $pdo->query('SELECT * FROM manufacturers');
			$stmt = new DatabaseTable($pdo,'manufacturers');
			$stmt = $stmt->findAll();

			foreach ($stmt as $category) {
				echo '<tr>';
				echo '<td>' . $category['name'] . '</td>';
				echo '<td><a style="float: right" href="editmanufacturer?id=' . $category['id'] . '">Edit</a></td>';
				echo '<td><form method="post" action="deletemanufacturer.php">
				<input type="hidden" name="id" value="' . $category['id'] . '" />
				<input type="submit" name="submit" value="Delete" />
				</form></td>';
				echo '</tr>';
			}

			echo '</thead>';
			echo '</table>';

		}

		else {
			?>
			<h2>Log in</h2>

			<form action="index.php" method="post">
				<label>Username</label>
				<input type="text" name="username" />

				<label>Password</label>
				<input type="password" name="password" />

				<input type="submit" name="submit" value="Log In" />
			</form>
		<?php
		}
	?>
</section>
</main>
<!-- This is the code for addmanufacturer_template  -->
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


	if (isset($_POST['submit'])) {

		//$stmt = $pdo->prepare('INSERT INTO manufacturers (name) VALUES (:name)');
		$stmt = new DatabaseTable($pdo,'manufacturers');


		$criteria = [
			'name' => $_POST['name']
		];

		//$stmt->execute($criteria);
		$stmt = $stmt->insert($criteria);
		echo 'Manufacturer added';
	}
	else {
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		?>


			<h2>Add Manufacturer</h2>

			<form action="" method="POST">
				<label>Name</label>
				<input type="text" name="name" />


				<input type="submit" name="submit" value="Add Manufacturer" />

			</form>
			

		<?php
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

	}
	?>
	</section>
</main>
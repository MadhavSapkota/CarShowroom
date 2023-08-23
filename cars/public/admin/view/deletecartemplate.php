<!-- This is the code for deletecartemplate  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
<?php
require '../model/connect.php';

session_start();
?>
<?php


		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

			$stmt = $pdo->prepare('DELETE FROM cars WHERE id = :id');
			$stmt->execute(['id' => $_POST['id']]);

			echo 'Car deleted';

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
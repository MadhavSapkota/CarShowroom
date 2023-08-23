<!-- This is the code for deletemanufacturer_template  -->
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

			$products = $pdo->query('DELETE FROM manufacturers WHERE id = ' . $_POST['id']);

			echo 'Manufacturer deleted';

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
<!-- This is the code for addcar_template  -->
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

		// $stmt = $pdo->prepare('INSERT INTO cars (name, description, price, milege, engine_type, manufacturerId) 
		 //					   VALUES (:model, :description, :price, :milege, :engine_type, :manufacturerId)');

		$stmt = new DatabaseTable($pdo, 'cars');


			$criteria = [
			'name' => $_POST['model'],
			'description' => $_POST['description'],
			'price' => $_POST['price'],
			'milege' => $_POST['milege'],
			'engine_type' => $_POST['engine_type'],

			'manufacturerId' => $_POST['manufacturerId']
		];

		// $stmt->execute($criteria);

		$stmt = $stmt->insert($criteria);
		
		if ($_FILES['image']['error'] == 0) {
			$fileName = $pdo->lastInsertId() . '.jpg';
			move_uploaded_file($_FILES['image']['tmp_name'], '../../images/cars/' . $fileName);
		}

		echo 'Car added';
	}
	else {
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		?>


			<h2>Add Car</h2>

			<form action="addcar" method="POST" enctype="multipart/form-data">
				<label>Car Model</label>
				<input type="text" name="model" />

				<label>Description</label>
				<textarea name="description"></textarea>

				<label>Price</label>
				<input type="text" name="price" />

				<label>Milege</label>
				<input type="text" name="milege" />

				<label>EngineType</label>
				<input type="text" name="engine_type" />

				<label>Category</label>

				<select name="manufacturerId">
				<?php
					//$stmt = $pdo->prepare('SELECT * FROM manufacturers');
					$stmt = new DatabaseTable($pdo,'manufacturers');
					$stmt = $stmt->findAll();
					//$stmt->execute();

					foreach ($stmt as $row) {
						echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
					}

				?>

				</select>

				<label>Image</label>

				<input type="file" name="image" />

				<input type="submit" name="submit" value="Add Car" />

			</form>
			

		
		<?php
		}

		else {
			?>
			<h2>Log in</h2>

			<form action="index.php" method="post">

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
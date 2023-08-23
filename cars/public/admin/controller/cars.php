<!-- This is the code for cars.php  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
<?php
	require '../model/connect.php';
	if (isset($_GET['id'])) {
		$stmt = $pdo->prepare("UPDATE cars
								SET status = :status	
								WHERE id = :id");
		$criteria = [
			'status' => 'archived',
			'id' => $_GET['id']
		];

		$stmt->execute($criteria);
	}
	$title = "Claires's Cars - Admin";
	$content = loadTemplate('../view/car_template.php', []);
?>

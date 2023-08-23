<!-- This is the code for archieve.php  -->
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
			'status' => 'none',
			'id' => $_GET['id']
		];

		$stmt->execute($criteria);
	}
	$title = "Claires's Cars - Admin";
	$content = loadTemplate('../view/archieve_template.php', []);
?>

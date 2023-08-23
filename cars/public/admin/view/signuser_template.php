<!-- This is the code for signuser_template  -->
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
	if (!isset($_SESSION['userSessionId'])) {
	// header('location:loginform.php');
	 }

	if(isset($_POST['signup'])){
		if ($_POST['password'] != $_POST['check1']){
			echo 'Please Enter the valid password.The password are not matched';


// 		echo '	<h2>Register</h2>
// <form action="" method="POST">
// 	<label>Username</label> <input type="text" name="username"><br><br>
// 	<label>Password</label> <input type="password" name="password"><br><br>
// 	<label>Confirm Password</label> <input type="password" name="check1"><br><br>
// 	<input type="submit" name="signup" value="Sign Up">
// </form>
// 		';


		}
		else{
			//$stmt = $pdo->prepare("INSERT INTO userlogin(user_id, username,password)
				//VALUES (:user_id, :username, :password)");
			$stmt = new DatabaseTable($pdo,'userlogin');
			$criteria = [
				'user_id' => '',
				'username' => $_POST['username'],
				'password' => $_POST['password']
			];
			//$stmt->execute($criteria);
			$stmt = $stmt->insert($criteria);
			echo "<h2>Congrtulations!</h2></br>
			The user account is created.";

		}
	}
		?>

<body>	
	<!-- <p><a href="index.php">BackIn</a></p> -->
</body>
	
	
		


<h2>Register</h2>
<form action="" method="POST">
	<label>Username</label> <input type="text" name="username"><br><br>
	<label>Password</label> <input type="password" name="password"><br><br>
	<label>Confirm Password</label> <input type="password" name="check1"><br><br>
	<input type="submit" name="signup" value="Sign Up">
</form>

	</section>
</main>

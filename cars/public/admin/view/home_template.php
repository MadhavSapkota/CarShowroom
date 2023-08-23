<!-- This is the code for home_template  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
< <main class="admin"> 

	<script>
//this code checks the validity of the username and password
	function valid(form){
  	var status=true;//initial status of this variable is true
  if(form.username.value==''){//checks the condition
    form.username.focus();
   	 status = false;//if the condition is true the status variable is assignment to false
  }
  if(form.password.value==''){//checks the condition
    form.password.focus();
    status = false;//if the condition is true the status variable is assignment to false
  }
  if(status==false){//checks the condition
    alert('Please Use right username and password....Please enter values in all the fields');//if the condition is true this dialogue box appears
    return false;//return false
  }
}
</script>

	 <!-- <section class="left"> -->
		<!-- <ul>
			<li><a href="manufacturers">Manufacturers</a></li>
			<li><a href="cars">Cars</a></li>
			<li><a href="archieve">ArchieveCars</a></li>
			<li><a href="signuser">Add admin</a></li>


		</ul> -->
	<!-- </section>  -->
	<!-- <section class="right"> -->


<?php
session_start();
if(isset($_SESSION['UserId'])){//if the userid is the required user id then the homepage.php file is opened

}
require '../model/connect.php';
if(!empty($_POST['username'])&&!empty($_POST['password'])){//checks the requirement

?>

<?php
	if (isset($_POST['submit'])) {
		$stmt = $pdo->prepare('SELECT * FROM userlogin WHERE username =:username AND password =:password');

		$criteria = [
        'username' => $_POST['username'],
        'password' =>$_POST['password']
    ];
     $stmt->execute($criteria);
     if($stmt->rowCount()>0){   //Code to check the password
         $row = $stmt->fetch();
         if($_SESSION['UserId'] =$row['user_id'] && $_SESSION['username'] =$row['username']){
            	$_SESSION['loggedin'] = true;
         }
     }
        
    else {
        echo '<script>'.'alert("Sorry,username and the password are invalid.Put valid username and password);'.'</script>';
    }

		// if ($_POST['password'] == 'admin' && $_POST['username'] == 'admin') {
		// 	$_SESSION['loggedin'] = true;	
		}
	}


	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	?>


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
	<!-- <section class="left">
		<ul>
			<li><a href="manufacturers">Manufacturers</a></li>
			<li><a href="cars">Cars</a></li>

		</ul>
	</section> -->

	<section class="right">
	<h2>You are now logged in</h2>
	</section>
	</main>

	<?php
	}

	else {
		?>

		<h2>Log in</h2>
		<?php
		 echo "Enter the username and password";
		?>

	<form action="index.php" method="post" onsubmit="return valid(this)" style="padding: 40px">


			<label>Enter Username</label>
			<input type="username" name="username" placeholder="Username"><br><br>

			<label>Enter Password</label>
			<input type="password" name="password" placeholder="Password"><br><br>

			<input type="submit" name="submit" value="Log In" />

		</form>

	<?php
	}

	?>
	
</section> 
</main> 
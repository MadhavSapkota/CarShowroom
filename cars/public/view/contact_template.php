<!-- This is the code for contact_template  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
<main class="home">
  <?php
  
  require '../db/connect.php';


if (isset($_POST['submit'])) {
    
  $stmt = new DatabaseTable($pdo, 'contactform');

    $criteria = [
                'contact_id' => '',
                'firstname' =>$_POST['firstname'],
                'surname' =>$_POST['surname'],
                'date_of_birth' =>$_POST['date_of_birth'],
                'email' =>$_POST['email'],
                'phonenumber' =>$_POST['phonenumber'],
                'message' =>$_POST['message'],
 ];
             $stmt = $stmt->insert($criteria);
              echo "Contact is submitted";

    //$result =$stmt->execute($criteria);//This is the code for the execution of the criteria.
    // require 'index.php';

}

?>
	<br>Please fill the form below:<br/>
				<form action="contact" method="POST">
						<label>FirstName</label> <input type="text" name="firstname" /><br/><br/><!--TextField for the firstname-->
						<label>Surname</label> <input type="text" name="surname" /><br/><br/><!--TextField for the Surname-->
						<label>Date_of_birth</label> <input type="date" name="date_of_birth"/><br/><br/><!--TextField for the Date of birth-->
						<label>Email</label> <input type="text" name="email"/><br/><br/><!--TextField for the email-->
						<label>Phonenumber</label> <input type="text" name="phonenumber"/><br/><br/><!--TextField for the phonenumber-->
						<label>Message</label> <textarea name="message" rows="1" cols="1">Enter Message.</textarea><br/><br/>
						<input type="submit" name="submit" value="Submit" /><!--For the submit button-->
			</form><!--Closing of the form-->
			<!-- </article>Closing of the article
 -->		<!--Closing of the main-->




</main>
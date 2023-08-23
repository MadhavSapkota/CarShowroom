<!-- This is the code for contactresult_template  -->
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

//$results = $pdo->query('SELECT * FROM contactform');//This gives the total results from the contactform.
$stmt= new DatabaseTable($pdo,'contactform');
$stmt = $stmt->findAll();

?>


<div style = "text-align:center;"><!--This is css of the table-->
<br><h2>ContactInformation</h2><br/>
<table border="1" cellpadding="2" cellspacing="1.5"><!--This shows the dimension of the columns-->
	<tr><!--Table is started-->
		<th>ContactId</th>
		<th>Firstname</th>
		<th>Surname</th>
		<th>Date Of Birth</th>
		<th>Email</th>
		<th>PhoneNumber</th>
		<th>Message</th>
	

	</tr><!--Table is Ended-->


<?php
	foreach ($stmt as $row) {//Retriving results from the database
		echo '<tr>';
		echo '<td>'.$row['contact_id'].'</td>';
		echo '<td>'.$row['firstname'].'</td>';
		echo '<td>'.$row['surname'].'</td>';
		echo '<td>'.$row['date_of_birth'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['phonenumber'].'</td>';
		echo '<td>'.$row['message'].'</td>';
		
		// header("Content-type: application/pdf");
		// //header('Content-disposition: attachment; filename="thing.pdf"');
		//  header('Content-length: ' . $row[pdflength]);
		// print $bytes;


       echo '</tr>';
}


echo '</table>';//This is the end of the table.
?>


</body><!--End of the body tag-->


	
 </section>
</main>
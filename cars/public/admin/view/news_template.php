<!-- This is the code for news_template.php  -->
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
			<li><a href="news">Add news Article</a></li>


		</ul>
	</section> 
	<!-- <section class="right"> --> 

<main class="home">
	

<?php
	
		require '../model/connect.php';
	if (isset($_POST['submit'])) {//When submit button is pressed following action is performed.
    	// $stmt = $pdo->prepare("INSERT INTO news(new_id, new_name,news_description)         
     // 	VALUES(:new_id, :new_name,  :news_description)");

		$stmt = new DatabaseTable($pdo, 'news');

    $criteria = [
                'new_id' => '',
                'new_name' =>$_POST['new_name'],
                'news_description' =>$_POST['news_description']
            ];

   	 $stmt =$stmt->insert($criteria);//This is the code for the execution of the criteria.
   	 if ($_FILES['image']['error'] == 0) {
			$fileName = $pdo->lastInsertId() . '.jpg';
			move_uploaded_file($_FILES['image']['tmp_name'], '../../images/cars/' . $fileName);
		}

		

   	 echo 'News Submitted';
  //  	 if ($_FILES['image']['error'] == 0) {
		// 	$fileName = $pdo->lastInsertId() . '.jpg';
		// 	move_uploaded_file($_FILES['image']['tmp_name'], '../productimages/' . $fileName);
		// }

		// echo 'Product saved';
    // if (file_exists('../productimages/' . $criteria['new_id'] . '.jpg')) {
						//echo '<img src="../productimages/' . $criteria['new_id'] . '.jpg" />';
					// }
				

}
				

					

?>
	
				


				<br>Insert the news Information:<br/>

				<form action="news" method="POST" enctype="multipart/form-data">
						<label>NewsName</label> <input type="text" name="new_name"  /><br/><br/><!--TextField for the firstname-->
						<label>NewsArticle</label> <textarea name="news_description" rows="5 cols="5">Enter Message.</textarea><br/><br/>
						<label>Image</label>

				<input type="file" name="image" />

				<!-- <input type="submit" name="submit" value="Add Car" /> -->

					
				<!-- <label>Product image</label> -->

				<!-- <input type="file" name="image" /> -->

						<input type="submit" name="submit" value="Submit" /><!--For the submit button-->
						</form><!--Closing of the form-->
							</article><!--Closing of the article-->
						</main><!--Closing of the main-->







</main>

</main>
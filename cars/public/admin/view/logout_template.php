<!-- This is the code for logout_template.php  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
<?php
	session_start();
	session_unset();
	session_destroy();
	header('location:index.php');
 ?>
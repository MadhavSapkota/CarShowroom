<!-- This is the code for mercedes_template  -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
<?php
$schema = 'semester2';
$server = 'localhost';
$username = 'student';
$password = 'student';
$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>
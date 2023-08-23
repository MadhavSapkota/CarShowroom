<!-- This is the code for connect.php -->
<!-- Name:Madhav Sapkota
UNID:17429433 
Web_assignment2

-->
<?php
$server = 'localhost';
$username = 'student';
$password = 'student';

$schema = 'semester2';

$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
?>
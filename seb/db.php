
<?php
//connect to mysql
$db_host = 'localhost';
$db_user = 'root';
$db_name = 'election-system2';
$db_pass = '';

//start connection
$cxn = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("Can't connect to server.");
?>
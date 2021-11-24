<?php
$db_host     = "localhost";
$db_name = "multivendormarketplace";
$db_username = "root";
$db_password = "";

$con = mysqli_connect($db_host,$db_username,$db_password) or die("Could not connect to Server".mysql_error());
mysqli_select_db($con, $db_name) or die("Could not connect to Database".mysql_error());

?>
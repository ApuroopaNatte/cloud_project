<?php include('includes/header.php'); ?>
<?php include('includes/config.php'); ?>

<?php
	
	$id =isset($_GET['username'])?$_GET['username']:'';

	$psql ="DELETE FROM `stores` WHERE username='$id'";
	$result = mysqli_query($con, $psql);

	$psql ="DELETE FROM `login` WHERE username='$id'";
	$result = mysqli_query($con, $psql);

	$psql ="DELETE FROM `products` WHERE storename='$id'";
	$result = mysqli_query($con, $psql);
	
	header('Location: viewstores.php');
	exit; 

?>
<?php include('includes/header.php'); ?>
<?php include('includes/config.php'); ?>

<?php
	
	$id =isset($_GET['pid'])?$_GET['pid']:'';

	$psql ="DELETE FROM `products` WHERE pid='$id'";
	$result = mysqli_query($con, $psql);
	
	header('Location: viewproducts.php');
	exit; 

?>
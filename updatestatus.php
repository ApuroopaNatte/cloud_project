<?php include('includes/header.php'); ?>
<?php include('includes/config.php'); ?>

<?php

if(isset($_POST['submit'])){
	
	$id= $_POST['id'];
	$status= $_POST['status'];
	
	$usql = "update `orders` set orderstatus='$status' where id='$id'";
    mysqli_query($con, $usql);

	header('Location: viewstoreorders.php');
    exit;
}

?>
<!-- start account -->
<div class="login-page">
	<div class="dreamcrub">
		<div class="account_grid">
			<div class="col-md-6 login-right">
				<h3>Update Order Status</h3>
				<form method="post" class="form form-vertical" id="test-form"
					method="post" onSubmit="loadVal();">
					
					<?php 
						$id =isset($_GET['id'])?$_GET['id']:'';
					?>
					<input type="hidden" value="<?php echo $id;?>" name="id">
					
					<div>
						<span>Select Status</span>
						<select name="status" required>
							<option value="">--select--</option>
							<option value="Packing">Packing</option>
							<option value="Out for Delivered">Out for Delivered</option>
							<option value="Delivered">Delivered</option>
						</select>
					</div>
					
					<input type="submit" name="submit" value="Update">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<?php include('includes/footer.php'); ?>
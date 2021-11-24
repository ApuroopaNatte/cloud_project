<?php include('includes/header.php'); ?>
<?php include('includes/config.php'); ?>

<?php

if(isset($_POST['submit'])){

	$type= $_POST['type'];
	$name= $_POST['name'];
	$mname= $_POST['mname'];
	$expdate= $_POST['expdate'];
	$description= $_POST['description'];
	$price= $_POST['price'];

	$image_dir= "productimages/";

   	$image_name = basename($_FILES['uploadedfile']['name']);

	$dest = $image_dir."".$image_name;

	$temp_file = $_FILES['uploadedfile']['tmp_name'];
	
	$status = move_uploaded_file($temp_file, $dest);

	if($status){

	
	$usql ="INSERT INTO `products` VALUES (null,'$name','$price','$mname','$expdate' ,'$description','$type','$image_name','$username')";
	
	$result = mysqli_query($con,$usql);

	$smsg = "Product Added Successfully";
}
else{
	$smsg = "Product Failed to Add";
}
}

?>
<!-- start account -->
<div class="login-page">
	<div class="dreamcrub">
		<div class="account_grid">
			<div class="col-md-6 login-right">
				<h3>Add Product</h3>
				<form method="post" class="form form-vertical" id="test-form"
					method="post" onSubmit="loadVal();" enctype="multipart/form-data">

					<span style="color: red;"> <?php echo isset($emsg)?$emsg:'';?> </span>

					<span style="color: green;"> <?php echo isset($smsg)?$smsg:'';?> </span>
					
					<div>
						<span>Name</span> <input type="text" name="name"
							id="name" required
							<?php echo isset($_POST['name'])?$_POST['name']:'';?>>
					</div>
					
					<div>
						<span>Price</span> <input type="number" name="price" style="width:460px;"
							id="price" required
							<?php echo isset($_POST['price'])?$_POST['price']:'';?>>
					</div>


					<div>
						<span>Manifacture</span> <input type="text" name="mname"
							id="mname" required>
							
					</div>

					<div>
						<span>Expiry Date</span> <input type="date" name="expdate"
							id="expdate" style="width:460px;">
					</div>

					<div>
						<span>Type</span> <input type="text" name="type"
							id="type" required
							<?php echo isset($_POST['type'])?$_POST['type']:'';?>>
					</div>

					<div>
						<span>Product Image</span>
						<input  type="file" name="uploadedfile" id="uploadedfile" required>
				   </div>

				   <div>
						<span>Description</span> <textarea cols="62" name="description"
							id="description" required
							<?php echo isset($_POST['description'])?$_POST['description']:'';?>> </textarea>
					</div>

					<input type="submit" name="submit" value="Add Product">
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

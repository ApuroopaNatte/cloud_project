<?php include('includes/header.php'); ?>
<?php include('includes/config.php'); ?>

<!-- start account -->
<div class="login-page">
	<div class="dreamcrub">
		<div class="account_grid">
			<div class="col-md-6 login-right">
				<h3>Search Products</h3>
				<form class="form form-vertical" id="test-form" action="searchproducts.php">
					<div>
						<span>Enter Query</span> <input type="text" name="keyword" id="keyword" required <?php echo isset($_POST['keyword'])?$_POST['keyword']:'';?>>
					</div>
					<input type="submit" name="submit" value="Search">
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
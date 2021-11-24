<?php include('includes/header.php'); ?>
<?php include('includes/config.php'); ?>

<?php 

$keyword =isset($_GET['keyword'])?$_GET['keyword']:'';

$result = mysqli_query($con, "SELECT * FROM  products where name like '%{$keyword}%' or type like '%{$keyword}%' or description like '%{$keyword}%'");

?>

<div id="page-wrapper">


	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong> Products </strong>
				</div>

				<!-- /.panel-heading -->
				<div class="panel-body">

					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover"
							id="dataTables-example">
							<thead>
								<tr>
									<td width="10%">Name</td>
									<td width="10%">Price</td>
									<td width="10%">Manifacture</td>
									<td width="10%">Expiry Date</td>
									<td width="10%">Description</td>
									<td width="10%">Type</td>
									<td width="10%">Image</td>
									<?php if($user_type == '3'){?>
										<td width="10%">Order</td>
									<?php } ?>
								</tr>
							</thead>
							<tbody>

							<?php while($row = mysql_fetch_assoc($result))  { ?>
					
								<tr>
									<td><?php echo $row ['name']; ?></td>
									<td><?php echo $row ['price']; ?></td>
									<td><?php echo $row ['mname']; ?></td>
									<td><?php echo $row ['expdate']; ?></td>
									<td><?php echo $row ['description']; ?></td>
									<td><?php echo $row ['type']; ?></td>
									<td><img src="productimages/<?php echo $row ['product_image']; ?>" style="width:200px;height:100px;"></td>
									
									<?php if($user_type == '3'){?>
										<td><a href="orderproduct.php?pid=<?php echo $row ['pid'];?>&price=<?php echo $row ['price'];?>">order</a></td>
									<?php } ?>

								</tr>

								<?php
							}
							
							?>
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->

				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
	</div>
</div>
</div>
</div>
</div>
<?php include('includes/footer.php'); ?>



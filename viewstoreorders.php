<?php include('includes/header.php'); ?>
<?php include('includes/config.php'); ?>

<?php
    $result = mysqli_query($con, "SELECT * FROM  products where store='$username'");
?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
    							<strong> View Orders </strong>
    						</div>
    						<div class="panel-body">
    							<div class="table-responsive">
    								<table class="table table-striped table-bordered table-hover"
    									id="dataTables-example">
    									<thead>
    										<tr>
    											<td width="10%">Order ID</td>
												<td width="10%">Product ID</td>
    											<td width="10%">Product Name</td>
    											<td width="10%">Order Date</td>
    											<td width="10%">Order Status</td>
												<td width="10%">Update Status</td>
    										</tr>
    									</thead>
    									<tbody>
        									<?php while($row = mysqli_fetch_assoc($result))  
        									  {
        									      $id=$row['pid'];
        									      $products = mysqli_query($con,"SELECT * FROM orders WHERE pid='$id'");
        								
        									       while($orow = mysqli_fetch_assoc($products)) 
        									      {
        									?>
            										<tr>
														<td><?php echo $orow ['id']; ?></td>
            											<td><a href="viewproduct.php?id=<?php echo $id; ?>"><?php echo $id; ?></a></td>
            											<td><?php echo $row ['name']; ?></td>
            											<td><?php echo $orow ['orderdate']; ?></td>
            											<td><?php echo $orow ['orderstatus']; ?></td>
														<td><a href="updatestatus.php?id=<?php echo $orow ['id']; ?>">update status</a></td>
            										</tr>
        									<?php
        									       }
                                                }
                                            ?>
    									</tbody>
    								</table>
    							</div>
    						</div>
			</div>
			<!-- /.panel -->
		</div>
	</div>
</div>
</div>
</div>
</div>
<?php include('includes/footer.php'); ?>
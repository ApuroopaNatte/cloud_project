<?php include('includes/header.php'); ?>
<?php include('includes/config.php'); ?>

<?php
    $result = mysqli_query($con,"SELECT * FROM  orders where userid='$username'");
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
    										</tr>
    									</thead>
    									<tbody>
        									<?php while($row = mysqli_fetch_assoc($result))  
        									  {
        									      $id=$row['pid'];
echo "".$id;
        									      $products = mysqli_query($con,"SELECT * FROM products WHERE pid='$id'");
        								
        									      if ($prow = mysqli_fetch_assoc($products)) 
        									      {
        									?>
            										<tr>
            											<td><?php echo $row ['id']; ?></td>
														<td><a href="viewproduct.php?id=<?php echo $id; ?>"><?php echo $row ['pid']; ?></a></td>
            											<td><?php echo $prow ['name']; ?></td>
            											<td><?php echo $row ['orderdate']; ?></td>
            											<td><?php echo $row ['orderstatus']; ?></td>
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
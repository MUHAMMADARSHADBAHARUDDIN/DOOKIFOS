
<?php include "header.php"; ?>

<style type="text/css">
	tr{
		font-size: 1.2em;
		color: black;


	}

	.update{
		color: green;
		text-decoration: none;
	}
	.del{
		color: red;
		text-decoration: none;
	}
	</style>
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Order List</h1>
				</div>
			</div>
		</div>
	</div>
<div class="content">
	<br><br>
	<?php include  "connect.php"; ?>
	<center>
	<table border=1 cellpadding="6" cellspacing="8" style="box-shadow: 5px 4px 10px 2px;  background-color:">
		<tr>
			 <th colspan="9">CUSTOMER ORDER</th>
		</tr>
		<tr>
			<th>Product ID</th>
			<th>User ID</th>
			<th>Customer Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Address</th>
			<th>View Product</th>
			<th>Update</th>
			<th>Delete</th>
			
		</tr>
		<?php
		$s = mysqli_query($con,"select * from checkout");
		while($r = mysqli_fetch_array($s))
		{
		?>
		<tr>
			<td><?php echo $r['p_id']; ?></td>
			<td><?php echo $r['u_id']; ?></td>
			<td><?php echo $r['name']; ?></td>
			<td><?php echo $r['mobile']; ?></td>
			<td><?php echo $r['email']; ?></td>
			<td><?php echo $r['location']; ?></td>
			<td><a>View Product</a></td>
			<td><a class = update href="">Update</a></td>
			<td><a href="delparcel.php? a=<?php echo $r['id']; ?>" class="del" onclick="return confirm('Are you sure you want to delete?');">DELETE</a></td>
		<?php 
		}
		?>
	</table>
	 

</div>
<br>
<?php include "footer.php"; ?>
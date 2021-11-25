<?php session_start();
    $uid = $_SESSION['uid'];?>
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
			 <th colspan="9">YOUR ORDER</th>
		</tr>
		<tr>
		    <th hidden > ID</th>
			<th>Time</th>
			<th>User ID</th>
			<!--<th>Customer Name</th>-->
			<th>PhoneNumber</th>
			<th>Email</th>
			<th>Address</th>
			<th>Product</th>
			<th>Qty</th>
			<th>Total</th>
			<th>Status</th>
			
			
		</tr>
		<?php
		$currentUser = $_SESSION['uid'];
		$s = mysqli_query($con,"SELECT * FROM checkout WHERE u_id  = '$currentUser'");
		while($r = mysqli_fetch_array($s))
		{
		?>
		<tr>
		    <td><?php echo $r['time']; ?></td>
		    <td hidden><?php echo $r['id']; ?></td>
			<td><?php echo $r['u_id']; ?></td>
			<!--<td><?php echo $r['name']; ?></td>-->
			<td><?php echo $r['mobile']; ?></td>
			<td><?php echo $r['email']; ?></td>
			<td><?php echo $r['location']; ?></td>
			<?php
			$p = mysqli_query($con,"select * from menu where id = " . $r['p_id'] . "" );
			while($m = mysqli_fetch_array($p))
			{
				?>
				<td><?php echo $m['title']; ?></td>
				<?php
			}
			?>
			<td><?php echo $r['qty']; ?></td>
			<td><?php echo $r['total']; ?></td>
			<?php
				if ($r['status'] == 0)
					{ ?>
					<th class = del>Ordered</th>
					<?php
					}
				else
					{
					?>
					<th class = update>Delivered</th>
					<?php 
					}
		}	
	
		?>
		   
	</table>
	

</div>
<br>
<?php include "footer.php"; ?>
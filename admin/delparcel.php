<?php include "header.php"; ?>
<div class="content">
	<br><br>
	<?php include  "connect.php"; 
        $a = $_GET['a'];
		mysqli_query($con,"delete from checkout where id='$a'");
    ?>
    <div style="color: red; font-size: 1.4em; font-weight: bold; border-radius:10px; background-color: yellow; padding: 10px; text-align: center;">Data Deleted SuccessFully</div>
		<br><br>
	<table border=1 cellpadding="6" cellspacing="8">
		<tr>
			 <th colspan="8">PARCEL CUSTOMERS</th>
		</tr>
		<tr>
			<th>Product ID</th>
			<th>User ID</th>
			<th>Customer Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Address</th>
			<th>View Product</th>
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
			<td><a href="viewcart.php?pid=<?php echo $r['p_id']; ?>&uid=<?php echo $r['u_id']; ?>">View Product</a></td>
			<td><a href="delparcel.php">Delete</a></td>
		<?php
		}
		?>
	</table>
	 

</div>
<?php include "footer.php"; ?>
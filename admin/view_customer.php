<?php session_start();
    $uid = $_SESSION['uid'];?>
<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<link rel="stylesheet" type="text/css" href="button.css">
<style type="text/css">
	tr{
		font-size: 1.2em;
		color: black;
	}
	.del{
		color: red;
		text-decoration: none;
	}
	.update{
		color: green;
		text-decoration: none;
	}
</style>
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>View Customer</h1>
				</div>
			</div>
		</div>
	</div>
	<body>
<div class="content">
<br>
<center>	
	<?php
		    include "searchCustomer.php";
			$qryCustomerList = "";
			displaySearchOption();
			if(isSet($_POST['searchByCustomerId']))
	        	$qryCustomerList = searchByCustomerId();
            else if (isSet($_POST['searchByEmail']))
	        	$qryCustomerList = searchByEmail();
			else
				$qryCustomerList = getListOfCustomer();
			?>
			<table border=1 width="80%" cellspacing="5" cellpadding="5" style="box-shadow: 5px 4px 10px 2px; ">
			<tr>
				<th>USER ID</th>
				<th>EMAIL</th>
				<th>TELEPHONE</th>
				<th>ADDRESS</th>
				<th>DATE OF BIRTH</th>
				<th>PROFILE</th>	
			</tr>
			<?php 
		while($s = mysqli_fetch_assoc($qryCustomerList))
		{
			?>
			<tr align=center>
				<td><?php echo $s['userid']; ?></td>
				<td><?php echo $s['email']; ?></td>
				<td><?php echo $s['tel']; ?></td>
				<td><?php echo $s['address']; ?></td>
				<td><?php echo $s['date']; ?></td>
				<td><img src="../<?php echo $s['profile']; ?>" width=70 height=70></td>	
			</tr>	
		<?php	
			}
			?>
   		</table>
   <?php		
		function displaySearchOption()
		{
			echo '<form action="" method="POST">';
				echo '<fieldset><legend>Search Option</legend>';
					echo '<input type="text" name="searchKey" 
						placeholder="Enter search value:">';
					echo '<input type="submit" value="Search By User ID"
							name="searchByCustomerId">';
					echo '<input type="submit" value="Search By E-mail"
							name="searchByEmail">';
					
					echo '<input type="submit" value="Display All"
							name="displayAllButton">';
                	echo '</fieldset>';
			echo '</form><br>';
		} 
		?>
</div>
</body>
<br>
<?php include "footer.php"; ?>
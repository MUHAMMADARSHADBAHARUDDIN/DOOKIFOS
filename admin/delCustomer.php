<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<style type="text/css">
	tr{
		font-size: 1.2em;
	}
	tr:hover{
		background-color: black;
		color: white;
	}
	th{
		color: tomato;
		font-size: 1.3em;
	}
	.del{
		color: red;
		text-decoration: none;
	}
	.del:hover{
		color: blue;
		text-decoration: none;
		text-shadow: 2px 3px 2px #FFFFFF;
	}
</style>
<div class="content">
	<?php
		$id = $_GET['a'];
		mysqli_query($con,"Delete from registration where userid='$id'");
		header("location:view_customer.php");
	?>		
</div>
<?php include "footer.php"; ?>
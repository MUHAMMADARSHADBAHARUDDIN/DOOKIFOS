<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<link rel="stylesheet" type="text/css" href="button.css">
<style type="text/css">
	tr{
		font-size: 1.2em;

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
	.btn{
		color: white;
		background-color: black;
		padding: 10px;
	}


</style>
<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Gallery</h1>
				</div>
			</div>
		</div>
	</div>
<div class="content">
<br>
	
	<form action="" method="post" enctype="multipart/form-data">
	<center>
	<table border=0  cellspacing="5" cellpadding="5" style="box-shadow: 5px 4px 10px 2px;">

		<tr> 
			<center>
			<th colspan="2">Upload Your Image Here &nbsp;&nbsp;&nbsp;&nbsp; </th>
			<a href="vgallery.php">View Gallery</a>
		</tr>
		<tr>
			<th>&nbsp;</th>
		</tr>
		<tr>
			<td align="right" width="50%">Choose Image Here</td><td><input type="file" name="img" value=""></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" class="button" name="sb" value="    Upload Now    "></td>
		</td>
		<tr>
			<th>&nbsp;</th>
		</tr>

	

	</table>
	</form>
	<?php
	if(isset($_POST['sb']))
	{
		
		$i = "img/".$_FILES['img']['name'];
		move_uploaded_file($_FILES['img']['tmp_name'], $i);//move file inside folder

		
		include "connect.php";
		mysqli_query($con,"insert into gallery(image)values('$i')") or die(mysqli_error($con));
		echo "<div style='padding:15px; color:red; background-color:black; font-size:1.2em; border-radius:10px;'>Data Uploaded SuccessFully....</div>";
	}
	?>
	<br><br>	
</div>
<?php include "footer.php"; ?>